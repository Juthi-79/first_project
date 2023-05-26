<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

class IncrementController extends Controller
{
    public function index(){
        return view('increment');
    }

    public function empno(){
        $empnoList=DB::table('EMP_PERSONAL')
        ->select('EMPNO')
        ->where('status','=','Active')
        ->orderBy('EMPNO','asc')
        
        ->get();

      return view('increment',['empnoList'=>$empnoList]);
    }
    function demolist(){
    
     $getData= DB::table('DEPT')
        ->select(DB::raw('\'D-\'||LPAD(NVL(MAX(SUBSTR(DEPT_NO,3)),0)+1,3,0) DEPT_CODE'))
        ->get();
        dd($getData);
    
    }

    public function empData($empno){
        $getEmpDet=DB::table('EMP_OFFICIAL')
        ->select('EMPNO',DB::raw('FIRST_NAME||\' \'||MIDDLE_NAME||\' \'||LAST_NAME   EMPNAME'),DB::raw('TO_CHAR(EO.JOINING_DATE,\'RRRR-MM-DD\') JOINING_DATE'),(DB::raw('HRM.GET_DEPT_NAME(DEPT_NO) DEPT_NAME')),'SECTION_NO','DESIGNATION_NO')
        ->where('EMPNO','=',$empno )
        ->get();

        return response()->json($getEmpDet);
    }

    public function tableData($empId){
        $getTable=DB::table('INCREMENT_INFO')
        ->select('EMPNO','PREV_DESIGNATION','CUR_DESIGNATION','PREV_OT_ENT','CUR_OT_ENT','PREV_GROSS','INCR_TYPE','INCREMENT_AMT','CUR_GROSS','INCR_DATE','REMARK_TEXT','PREV_HOUSE_RENT','PREV_MEDICAL','PREV_BASIC','CUR_HOUSE_RENT','CUR_MEDICAL','CUR_BASIC','EFFECTIVE_DATE')
        ->where('EMPNO','=',$empId)
        ->get();

        return view('incr_table',['tableList'=>$getTable]);
    }
}
    

