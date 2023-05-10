<?php

namespace App\Http\Controllers;

use DB;

use App\Models\City;
use App\Models\District;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function home(){
        return view('city');
    }

    public function c_store(Request $request)
    {
        $cityDT = new City();
        if($request->ajax())
        {
            try{
                $cityDT->city = $request->city;
                $cityDT->save();
            }catch(Exception $e){
                return redirect('home')->with('failed', "operation failed");
            }
            return response()->json([
                'status'=>200,
            ]);
        }
    }

    // handle fetch all students ajax request
	public function fetchAll() {
		$cityDT = City::all();
        $districtDT = District::all();
		$output = '';
		if ($cityDT->count() > 0) {
			$output .= '<table class="table table-striped table-sm text-center align-middle">
            <thead>
              <tr>
                <th>Name of the City</th>
                <th>District of Bangladesh</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>';
			foreach ($cityDT as $ct) {
				$output .= '<tr>
                <td>' . $ct->city . '</td>
                <td>' . $ct->district . '</td>
                <td>
                  <a href="#" id="edit" class="text-success mx-1 editIcon" data-id="{{$ct->city }}" data-bs-toggle="modal" data-bs-target="#editEmployeeModal"><i class="fa-regular fa-pen-to-square"></i></i></a>

                  <a href="#" id="delete" data-id="'.$ct->city.'" class="text-danger mx-1 deleteIcon"><i class="fa-solid fa-trash-can"></i></i></a>
                </td>
              </tr>';
			}
			$output .= '</tbody></table>';
			echo $output;
		} else {
			echo '<h1 class="text-center text-secondary my-5">No record present in the database!</h1>';
		}
	}


}
