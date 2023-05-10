<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Employee Loan Entry</title>

     {{-- font awesome cdn --}}
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
  
     <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">

     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    
    <div class="row">
        <form id="insert_form"  >
            @csrf
            <div class="container col-lg-6 text-left">
                <h2 class="p-2 text-center">Employee Loan Entry</h2>
                <hr/>

                <div class="row">
                    {{-- company name input --}}
                    <div class="col-md-6">
                        <div class="row p-1">
                            <label for="company_name" class="col-sm-4 col-form-label">Company Name :</label>
                            <div class="col-sm-7">
                                <select class="form-select" name="company_name" id="company_name" aria-label="Default select example">
                                    <option selected placeholder="Selct one">Select One</option>
                                    <option value="volvo">1001</option>
                                    <option value="saab">1002</option>
                                    <option value="fiat">1003</option>
                                    <option value="audi">1004</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    {{-- Loan App No input --}}
                <div class="col-md-6">
                    <div class="row p-1">
                        <label for="loan_app_name" class="col-sm-4 col-form-label">Loan App No :</label>
                        <div class="col-sm-7">
                            <select class="form-select" name="loan_app_name" id="loan_app_name" aria-label="Default select example">
                                <option selected placeholder="Select one">Select One</option>
                                <option value="volvo">1001</option>
                                <option value="saab">1002</option>
                                <option value="fiat">1003</option>
                                <option value="audi">1004</option>
                            </select>
                        </div>
                    </div>
                </div>
                    
            </div>
    
                <div class="row">
                    {{-- EMP NO input --}}
                    <div class="col-md-6">
                        <div class="row p-1">
                            <label for="emp_no" class="col-sm-4 col-form-label">EMP NO :</label>
                            <div class="col-sm-7">
                                <select class="form-select" name="emp_no" id="emp_no" aria-label="Default select example">
                                    <option selected placeholder="Selct one">Select One</option>
                                    <option value="volvo">GHJK</option>
                                    <option value="saab">SDFG</option>
                                    <option value="fiat">XCVB</option>
                                    <option value="audi">ERTY</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    {{--Employee Name input --}}
                    <div class="col-md-6">
                        <div class="row p-1">
                            <label for="emp_name" class="col-sm-4 col-form-label">Employee Name :</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="emp_name" name="emp_name" value="{{ old('emp_name') }}">
                            </div>
                        </div>                          
                    </div>

                </div>

                <div class="row">
                    {{-- Department name input --}}
                    <div class="col-md-6">
                        <div class="row p-1">
                            <label for="dept_no" class="col-sm-4 col-form-label">Department :</label>
                            <div class="col-sm-7">
                                <select class="form-select" name="dept_no" id="dept_no" aria-label="Default select example">
                                    <option selected placeholder="Selct one">Select One</option>
                                    <option value="volvo">1001</option>
                                    <option value="saab">1002</option>
                                    <option value="fiat">1003</option>
                                    <option value="audi">1004</option>
                                </select>
                            </div>
                        </div>                          
                    </div>

            
                {{-- Designation input --}}
                <div class="col-md-6">
                    <div class="row p-1">
                        <label for="designation" class="col-sm-4 col-form-label">Designation :</label>
                        <div class="col-sm-7">
                            <select class="form-select" name="designation" id="designation" aria-label="Default select example">
                                <option selected placeholder="Selct one">Select One</option>
                                <option value="volvo">1001</option>
                                <option value="saab">1002</option>
                                <option value="fiat">1003</option>
                                <option value="audi">1004</option>
                            </select>
                        </div>
                    </div>                          
                </div>
            </div>

            <div class="row">
                {{-- Joining Date input --}}
                <div class="col-md-6">
                    <div class="row p-1">
                        <label for="joining_date" class="col-sm-4 col-form-label">Joining Date :</label>
                        <div class="col-sm-7">
                            <input type="date" class="form-control" name="joining_date" id="joining_date" value="{{ old('joining_date') }}">
                        </div>
                    </div>                          
                </div>

            
                    
                {{-- Section input --}}
                <div class="col-md-6">
                    <div class="row p-1">
                        <label for="section_no" class="col-sm-4 col-form-label">Section :</label>
                        <div class="col-sm-7">
                            <select class="form-select" name="section_no" id="section_no" aria-label="Default select example">
                                <option selected placeholder="Selct one">Select One</option>
                                <option value="volvo">1001</option>
                                <option value="saab">1002</option>
                                <option value="fiat">1003</option>
                                <option value="audi">1004</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                {{-- Gross Amount input --}}
                <div class="col-md-6">
                    <div class="row p-1">
                        <label for="gross_amount" class="col-sm-4 col-form-label">Gross Amount :</label>
                        <div class="col-sm-7">
                            <input type="number" class="form-control" name="gross_amount" id="gross_amount" value="{{ old('gross_amount') }}">
                        </div>
                    </div>                          
                </div>

                 {{-- Loan Approved Date input --}}
            <div class="col-md-6">
                <div class="row p-1">
                    <label for="loan_approved_date" class="col-sm-4 col-form-label">Loan Approved Date :</label>
                    <div class="col-sm-7">
                        <input type="date" class="form-control" name="loan_approved_date" id="loan_approved_date" value="{{ old('loan_approved_date') }}">
                    </div>
                </div>
            </div>

            </div>

            <div class="row">

                {{-- Application Date input --}}
                <div class="col-md-6">
                    <div class="row p-1">
                        <label for="application_date" class="col-sm-4 col-form-label">Application Date :</label>
                        <div class="col-sm-7">
                            <input type="date" class="form-control" name="application_date" id="application_date" value="{{ old('application_date') }}">
                        </div>
                    </div>                          
                </div>
      
            {{-- Sanction Amount input --}}
            <div class="col-md-6">
                <div class="row p-1">
                    <label for="sanction_amount" class="col-sm-4 col-form-label">Sanction Amount :</label>
                    <div class="col-sm-7">
                        <input type="number" class="form-control" name="sanction_amount" id="sanction_amount" value="{{ old('sanction_amount') }}">
                    </div>
                </div>                          
            </div>
        </div>

        <div class="row">
                 
            {{-- First Install Date input --}}
            <div class="col-md-6">
                <div class="row p-1">
                    <label for="first_install_date" class="col-sm-4 col-form-label">First Install Date :</label>
                    <div class="col-sm-7">
                        <input type="date" class="form-control" name="first_install_date" id="first_install_date" value="{{ old('first_install_date') }}">
                    </div>
                </div>
            </div>

            {{-- Department name input --}}
            <div class="col-md-6">
                <div class="row p-1">
                    <label for="new_instt_date" class="col-sm-4 col-form-label">New Install Date :</label>
                    <div class="col-sm-7">
                        <input type="date" class="form-control" name="new_instt_date" id="new_instt_date" value="{{ old('new_instt_date') }}">
                    </div>
                </div>                          
            </div>
        </div>

    <div class="row">
        {{-- Installment Size selection --}}
        <div class="col-md-6">
            <div class="row p-1">
                <label for="installment_size" class="col-sm-4 col-form-label">Installment Size :</label>
                <div class="col-sm-7">
                    <input type="number" class="form-control" name="installment_size" id="installment_size" value="{{ old('installment_size') }}">
                </div>
                </div>
            </div>                          
        </div>
    

    <div class="row">
        {{-- Period input --}}
        <div class="col-md-6">
            <div class="row p-1">
                <label for="period" class="col-sm-4 col-form-label">Period :</label>
                <div class="col-sm-7">
                    <input type="number" class="form-control" name="period" id="period" value="{{ old('period') }}">
                </div>
            </div>
        </div>

        {{-- New Period input --}}
        <div class="col-md-6">
            <div class="row p-1">
                <label for="new_period" class="col-sm-4 col-form-label">New Period :</label>
                <div class="col-sm-7">
                    <input type="date" class="form-control" name="new_period" id="new_period" value="{{ old('new_period') }}">
                </div>
            </div>                          
        </div>
    </div>
    
    <div class="row">
        {{-- Pre Loan Amount input --}}
        <div class="col-md-6">
            <div class="row p-1">
                <label for="pre_loan_amount" class="col-sm-4 col-form-label">Pre Loan Amount :</label>
                <div class="col-sm-7">
                    <input type="number" class="form-control" name="pre_loan_amount" id="pre_loan_amount" value="{{ old('pre_loan_amount') }}">
                </div>
            </div>
        </div>

        {{-- Pre Balance Amount input --}}
        <div class="col-md-6">
            <div class="row p-1">
                <label for="pre_balance_amount" class="col-sm-4 col-form-label">Pre Balance Amount :</label>
                <div class="col-sm-7">
                    <input type="number" class="form-control" name="pre_balance_amount" id="pre_balance_amount" value="{{ old('pre_balance_amount') }}">
                </div>
            </div>                          
        </div>
    </div>

    <div class="row">
             
        {{-- company name input --}}
        <div class="col-md-6">
            <div class="row p-1">
                <label for="ref_name" class="col-sm-4 col-form-label">Reference Name :</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="ref_name" id="ref_name" value="{{ old('ref_name') }}">
                </div>
            </div>
        </div>

        {{-- Department name input --}}
        <div class="col-md-6">
            <div class="row p-1">
                <label for="ref_des_name" class="col-sm-4 col-form-label">Ref Des Name :</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="ref_des_name" id="ref_des_name" value="{{ old('ref_des_name') }}">
                </div>
            </div>                          
        </div>
    </div>
    <hr/>
</div>

    

    
                <div class="row-md-6 m-3 text-center">
                    <button class="btn btn-success" type="submit" id="insert_btn">Save</button>
                    <button class="btn btn-info" type="submit" id="submit_btn">Submit</button>
                    <button class="btn btn-danger" type="button">Cancel</button>
                  </div>
    
                  <div class="container justify-content-center" style="margin-top : 20px">
                    @if( Session::get('delet'))
                     <div class="alert alert-success">
                       {{Session::get('delet')}}
                     </div>
                     @endif
                     @if(Session::get('deletef'))
                     <div class="alert alert-danger">
                       {{Session::get('deletef')}}
                     </div>
                     @endif
                   
                  </div>
    
                
    
            </div>
        </form>
       </div>

       <div class="container">
        <table class="table table-striped table-sm table-center align-middle"id="maintb">
            <thead>
                <tr>
                    <th>Install No</th>
                    <th>PBBOM</th>
                    <th>Install Amount</th>
                    <th>Install Date</th>
                    <th>PBEOM</th>
                    <th>Pay Date</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
       </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
 
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script>

        $(function(){
           
            $("#period").on('keyup',function(){

            var sanctionAmount=parseInt($('#sanction_amount').val());
            var period=parseInt($('#period').val());
            var installmentsize=sanctionAmount/period;
            console.log(installmentsize);
            console.log(period);
            console.log(sanctionAmount);

            $('#installment_size').val(installmentsize);

        });
            //insert form data with ajax request
            $("#insert_form").submit(function(e){
                e.preventDefault();

                $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });



                const fd = new FormData(this);
                console.log(fd);       
$.ajax({
    
    url: 'lonestore',
    type: 'POST',
    data: fd,
    cache: false,
    contentType:  false,
    processData: false,
    dataType: 'json',
    success: function(response) {
    console.log(response);
      if (response.status == 200) {

              table();
            }
            },  error: function (response) {
             alert('dd');
              console.log(response);
        
            }
    });
});


        $("#submit_btn").on('click',function(e){
        e.preventDefault();
        var totalamount=(parseInt($('#sanction_amount').val()));
        var firdtInsDat='31-07-2023';
        var installmonth=(parseInt($('#period').val()));
        var installAmount=totalamount/installmonth;
        var ball=totalamount-installAmount;
    $('#maintb tr:last').after('<tr><td>'+'1'+'</td><td>'+totalamount+'</td><td id="installamounttd">'+installAmount+'</td><td>'+firdtInsDat+'</td><td  id="insamm">'+ball+'</td><td>'+'Deu'+'</td><td>'+'Deu'+'</td></tr>');
   var erty=parseInt($('table:first tr').find('#insamm').last().text())
        console.log(erty);
        if(!erty=='0'){
    for (let i =1; i < installmonth; i++) {
  // some code
  var tt =parseInt($('table:first tr').find('#insamm').last().text());
  var installamounttd =parseInt($('table:first tr').find('#installamounttd').last().text());

  var ttamm= tt-installAmount;
var ttER= i+1
        $('#maintb tr:last').after('<tr><td>'+ttER+'</td><td>'+tt+'</td><td id="installamounttd">'+installAmount+'</td><td>'+firdtInsDat+'</td><td  id="insamm">'+ttamm+'</td><td>'+'Deu'+'</td><td>'+'Deu'+'</td></tr>');
        $(this).prop("disabled",true);

    }}
console.log(tt);
});

public function table(){

    $(function(){

               const fd = new FormData(this);
               console.log(fd);       
            
               $.ajax({
   
                url: 'lonetablestore',
                type: 'POST',
                data: fd,
                cache: false,
                contentType:  false,
                processData: false,
                dataType: 'json',
                success: function(response) {
                console.log(response);
                    if (response.status == 200) {

                            Swal.fire(
                            'Added!',
                            'Employee Added Successfully!',
                            'success'
                            )
                        }
                        },  error: function (response) {
                            alert('dd');
                            console.log(response);
       
                        }
                });
        });
}
    






















            // fetchAllLoan();

            //fetch all data from db using ajax request
            // function fetchAllLoan(){
            //     $.ajax({
            //         url: '{{ route('l.fetchAll') }}',
            //         method: 'get',
            //         complete: function(response){
            //             $("#show_all_data").html(response);
            //             $("table").DataTable({
            //                 order:[0, 'asc']
            //             });
                       
            //         }
            //     });
            // }
        });
    </script>
</body>
</html>