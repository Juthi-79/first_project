<?php

namespace App\Http\Controllers;

use DB;

use App\Models\StudentModel;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    public function emp()
    {
        return view('form');
    }

    public function store(Request $request)
    {

        
        // $validator = Validator::make($request->all(), [
        //     'roll' => 'required|max:10',
        //     'name' => 'required|max:200',
        //     'email' => 'required|max:200',
        //     'gender' => 'required',
        //     'dob' => 'required',
        // ]);

        // if($validator->fails())
        // {
        //     return response()->json([
        //         'status' => 400,
        //         'errors' =>$validator->messages(),
        //     ]);
        // }
        // else
        // {
        //     $id=DB::table('student')
        //         ->select (DB::raw('NVL(MAX(ID),0)+1 AS ID'))
        //         ->first();

        //         try{
        //             $student = new StudentModel();
        
        //             $student->id=$id->id;
                    
        //             $student->roll = $request->input('roll');
        //             $student->name = $request->input('name');
        //             $student->email = $request->input('email');
        //             $student->gender = $request->input('gender');
        //             $student->dob = $request->input('dob');
                    
        //             $student->save();
            
        //             return redirect('form')->with('status', "Inserted Successfully");
        //         }catch(Exception $e){
        //             return redirect('form')->with('failed',"operation failed");
        //         }
        
        // }

        $studData = [
            'roll' => $request->roll,
            'name' => $request->name,
            'email' => $request->email,
            'gender' =>$request->gender,
            'dob' => $request->dob
        ];

        StudentModel::create($studData);
        return response()->json([
            'status' => 200,
        ]);
       
    }

}
