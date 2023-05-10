<?php

namespace App\Http\Controllers;

use DB;
use Session;

use App\Models\LoanDetails;
use App\Models\LoanMaster;
use Exception;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    public function loan(){
        return view('loan');
    }

    //storing form data using ajax request
    public function storeer(Request $request)
    {
        // $loanData = new LoanDetails();

        if($request->ajax())
        {
            try{
                $loanMaster = new LoanMaster();
                $loanMaster->emp_no = $request->emp_no;
                $loanMaster->emp_name = $request->emp_name;
                $loanMaster->company_name = $request->company_name;
                $loanMaster->dept_no = $request->dept_no;
                $loanMaster->designation = $request->designation;
                $loanMaster->joining_date = $request->joining_date;
                $loanMaster->section_no = $request->section_no;
                $loanMaster->gross_amount = $request->gross_amount;
                $loanMaster->loan_app_name = $request->loan_app_name;
                $loanMaster->application_date = $request->application_date;
                $loanMaster->loan_approved_date = $request->loan_approved_date;
                $loanMaster->sanction_amount = $request->sanction_amount;
                $loanMaster->first_install_date = $request->first_install_date;
                $loanMaster->new_instt_date = $request->new_instt_date;
                $loanMaster->installment_size = $request->installment_size;
                $loanMaster->period = $request->period;
                $loanMaster->new_period = $request->new_period;
                $loanMaster->pre_loan_amount = $request->pre_loan_amount;
                $loanMaster->pre_balance_amount = $request->pre_balance_amount;
                $loanMaster->ref_name = $request->ref_name;
                $loanMaster->ref_des_name = $request->ref_des_name;
                $loanMaster->save();

            }catch(Exception $e){
                return redirect('loan')->with('failed', "operation failed");
            }
            return response()->json([
                'status' => 200,
            ]);
        }
    }

    public function storetable(Request $request)
    {
        

        if($request->ajax())
        {
            try{
                $loanData = new LoanDetails();
                $loanData->install_no = $request->install_no;
                $loanData->pbbom = $request->pbbom;
                $loanData->install_amount = $request->install_amount;
                $loanData->install_date = $request->install_date;
                $loanData->pbeom = $request->pbeom;
                $loanData->paydate = $request->paydate;
                $loanData->status = $request->status;
                
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
}
