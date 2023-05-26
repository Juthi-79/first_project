<?php

namespace App\Http\Controllers;

use DB;
use Session;



use App\Models\LoanMaster;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Route ;

use Exception;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    public function loan(){
        $companyList=DB::table('COMPANY')
        ->select('COMPANY_ID','COMPANY_NAME')
        ->orderBy('COMPANY_ID','desc')
         ->get();
        return view('loan',['companyList'=>$companyList]);
    }

public function getEmpData($empno){
$getEmpDet=DB::table(DB::raw('EMP_Personal EP'))
->select('EP.EMPNO',DB::raw('FIRST_NAME||\' \'||MIDDLE_NAME||\' \'||LAST_NAME   EMPNAME'),DB::raw('TO_CHAR(EO.JOINING_DATE,\'RRRR-MM-DD\') JOINING_DATE'),(DB::raw('HRM.GET_DEPT_NAME(DEPT_NO) DEPT_NAME')),'DEPT_NO','DEPT_NAME','SECTION_NO','GROSS','EO.DESIGNATION_NAME')
->crossJoin(DB::raw('EMP_OFFICIAL EO'))
->whereRaw('EP.EMPNO = EO.EMPNO')
->where('EP.EMPNO','=',$empno)
->get();
return response()->json($getEmpDet);
}

// public function getDate($empno){
//     $empDate=DB::table('EMP_PERSONAL')
//     ->select(DB::raw('FORMATE(JOINING_DATE,\'DD-MM-YYYY\')'))
//     ->where('EMPNO','=',$empno)
//     ->get();

//     return response()->json($empDate);
// }

    public function empList($id){

        $emPList=DB::table('EMP_PERSONAL')
        ->select('EMPNO')
        ->where('COMPANY_ID','=',$id)
        ->get();
        return response()->json($emPList);
    
    }
    //storing form data using ajax request
    public function storeer(Request $request)
    {
        $data = $request->input();


        $loanId=DB::table('EMP_LOAN_MASTER')
        ->select(DB::raw('LPAD(NVL(MAX(TO_NUMBER(SUBSTR (LOAN_APP_NO,8))),0)+1,4,0) AA'))
        ->where('COMPANY_ID','=',$data['company_id'])
        ->first();
        // $loanData = new LoanDetails();
       $loanNo='F-'.$data['company_id'].'/'.$loanId->aa;
            try{
                $loanMaster = new LoanMaster;
                $loanMaster->loan_app_no=$loanNo;
                $loanMaster->emp_no=$data['emp_no'];
                $loanMaster->company_id=$data['company_id'];

                // $loanMaster->dept_no=$data['dept_no'];
                // $loanMaster->section_no=$data['section_no'];
                // $loanMaster->gross_amount=$data['gross_amount'];
                // $loanMaster->joining_date=$data['joining_date'];
                // $loanMaster->application_date=$data['application_date'];
                // $loanMaster->loan_approved_date=$data['loan_approved_date'];
                // $loanMaster->sanction_amount=$data['sanction_amount'];
                // $loanMaster->pre_balance_amount=$data['pre_balance_amount'];
                // $loanMaster->first_install_date=$data['first_install_date'];
                // $loanMaster->period=$data['period'];
                // $loanMaster->loan_app_no=$data['loan_app_no'];
                // $loanMaster->ref_des_name=$data['ref_des_name'];
                // $loanMaster->new_instt_date=$data['new_instt_date'];
                // $loanMaster->new_period=$data['new_period'];
                
                $loanMaster->save();
                
                return response()->json([
                    'loan_no' => $loanNo,

                    'status' => 200,
                ], 200);
            }catch(Exception $e){
                return redirect('loan')->with('failed', "operation failed");
            }
          
    }

    public function storetable(Request $request)
    {
        $tb_data = $request->input();

        if($request->ajax())
        {
            try{
                $loanData = new LoanDetails();
                $loanData->install_no = $tb_data['install_no'];
                $loanData->pbbom = $tb_data['pbbom'];
                $loanData->install_amount = $tb_data['install_amount'];
                $loanData->install_date = $tb_data['install_date'];
                $loanData->pbeom = $tb_data['pbeom'];
                $loanData->paydate = $tb_data['paydate'];
                $loanData->status = $tb_data['status'];
                
                $loanData->save();

            }catch(Exception $e){
                return redirect('loan')->with('failed', "operation failed");
            }
            return response()->json([
                'status' => 200,
            ]);
        }
    }

    // public function fetchAll(){
    //     $loan = LoanDetails::all();
    //     $output = '';
    //     if($loan->count() > 0){
    //         $output .='<table class="table table-striped table-sm table-center align-middle">
    //         <thead>
    //             <tr>
    //                 <th>Install No</th>
    //                 <th>PBBOM</th>
    //                 <th>Install Amount</th>
    //                 <th>Install Date</th>
    //                 <th>PBEOM</th>
    //                 <th>Pay Date</th>
    //                 <th>Status</th>
    //                 <th>Action</th>
    //             </tr>
    //         </thead>
    //         <tbody>';
    //         foreach($loan as $ln){
    //             $output .= '<tr>
    //                 <td>' . $ln->install_no . '</td>
    //                 <td>' . $ln->pbbom . '</td>
    //                 <td>' . $ln->install_amount . '</td>
    //                 <td>' . $ln->install_date . '</td>
    //                 <td>' . $ln->pbeom . '</td>
    //                 <td>' . $ln->paydate . '</td>
    //                 <td>' . $ln->status . '</td>
    //                 <td>
    //                  <a href="#" id="edit" class="text-success mx-1 editIcon" data-id="{{$ln->install_no}}" data-bs-toggle="modal" data-bs-target="#editLoanModal"><i class="fa-regular fa-pen-to-square"></i></i></a>

    //                  <a href="#" id="delete" data-id="'.$ln->install_no.'" class="text-danger mx-1 deleteIcon"><i class="fa-solid fa-trash-can"></i></i></a>
    //                  </td>
    //                </tr>';
    //         }
    //         $output .= '</tbody></table>';
    //         echo $output;
    //     }else{
    //         echo '<h1 class="text-center text-secondary my-5">No record present in  the database!</h1>';
    //     }
    // }

    public function deptList($id){
        $deptList=DB::table('DEPT')
        ->where('company_id','=',$id)
        ->orderBy('DEPT_NO','asc')

      //  ->pluck('dept_no','dept_name');
        ->get();

        return response()->json($deptList);

    }

    // public function getEmp(){
    //     $emp=DB::table('EMP_PERSONAL')
    //     ->where('EMP_NO','=','101037')
    //     ->get();
    //     return response()->json($emp);
    
    //     }

    // public function destroyLoan($loan_no){
    //     $destroyFind = DB::table('EMP_LOAN_MASTER')
    //     ->select('*')
    //     ->where('loan_app_no','=',$loan_no)
    //     ->first();
    //     if(!optional($destroyFind)->loan_app_no == null){
    //         try{
    //             $destroy = DB::table('EMP_LOAN_MASTER')
    //             ->where('loan_app_no','=',$loan_no)
    //             ->delete();
    //             return redirect('/loan')->with('delet')
    //         }
    //     }
    // }
    
}
