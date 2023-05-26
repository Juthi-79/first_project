<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function index()
    {
        return view('attendance');
    }

    public function compData(){
        $company =DB::table('EMP_OFFICIAL')
        ->select('COMPANY_NAME','COMPANY_ID')
        ->get();

        return view('attendance',['company'=>$company]); 
    }
}
