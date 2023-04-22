<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function emp()
    {
        return view('form');
    }

    public function store(Request $request)
    {

        $id=DB::table('student')
        ->select (DB::raw('NVL(MAX(ID),0)+1 AS ID'))
        ->first();

        // $data

        try{
            $student = new Student();

            $student->id=$id->id;
            
            $student->roll = $request->input('roll');
            $student->name = $request->input('name');
            $student->email = $request->input('email');
            $student->gender = $request->input('gender');
            $student->dob = $request->input('dob');
            
            $student->save();
    
            return redirect('form')->with('status', "Inserted Successfully");
        }catch(Exception $e){
            return redirect('form')->with('failed',"operation failed");
        }

       
    }

}
