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
    $studentDT =new StudentModel();
    if($request->ajax())
        {
       try{
          $studentDT ->roll = $request->roll;
          $studentDT ->name = $request->name;
          $studentDT ->email = $request->email;
          $studentDT ->gender = $request->gender;
          $studentDT ->dob = $request->dob;
        $studentDT->save();
       }catch(Exception $e){
        return redirect('upload')->with('failed',"operation failed");
    }
        return response()->json([
            'status' => 200,
        ]);
    }
    }

    // handle fetch all students ajax request
	public function fetchAll() {
		$student = StudentModel::all();
		$output = '';
		if ($student->count() > 0) {
			$output .= '<table class="table table-striped table-sm text-center align-middle">
            <thead>
              <tr>
                <th>Roll</th>
                <th>Name</th>
                <th>E-mail</th>
                <th>Gender</th>
                <th>Date Of Birth</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>';
			foreach ($student as $stud) {
				$output .= '<tr>
                <td>' . $stud->roll . '</td>
                <td>' . $stud->name . '</td>
                <td>' . $stud->email . '</td>
                <td>' . $stud->gender . '</td>
                <td>' . $stud->dob . '</td>
                <td>
                  <a href="#" id="edit" class="text-success mx-1 editIcon" data-id="{{$stud->roll }}" data-bs-toggle="modal" data-bs-target="#editEmployeeModal"><i class="fa-regular fa-pen-to-square"></i></i></a>

                  <a href="#" id="roll" data-id="'.$stud->roll.'" class="text-danger mx-1 deleteIcon"><i class="fa-solid fa-trash-can"></i></i></a>
                </td>
              </tr>';
			}
			$output .= '</tbody></table>';
			echo $output;
		} else {
			echo '<h1 class="text-center text-secondary my-5">No record present in the database!</h1>';
		}
	}

    // handle delete student ajax request
	// 

// public function destroy($roll)
//     {
//         StudentModel::find($roll)->delete();
//         return response()->json(['success' => 'Student Deleted Successfully']);
//     }

    public function delete($roll){
        $data = DB::table('STUDENT')
        ->select('*')
        ->where('ROLL','=', $roll)
        ->first();
        
        
            if(!optional($data)->name==null){
                try{
                    
                }
                $DD = DB::table('STUDENT')
                ->where('ROLL','=', $roll)
                ->delete($DD);
                return redirect('form')->with('delet',"Deleted Successfully");
            }else{
                return redirect('form')->with('deletef',"Operation failed");
            }
        
       
    }

    //handle edit student ajax request
    public function edit(Request $request)
    {
        $roll = $request->roll;
        $stud = StudentModel::find($roll);
        return response()->json($stud);
    }

    //handle update student ajax request
    // public function update(Request $request)
    // {
        
    // }

}
	

    


