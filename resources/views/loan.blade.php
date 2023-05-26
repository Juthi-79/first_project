<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee Loan Entry</title>

    {{-- font awesome cdn --}}

    {{-- font awesome cdn --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body>

    <div class="row">
        <form id="insert_form">
            @csrf
            <div class="container col-lg-6 text-left">
                <h2 class="p-2 text-center">Employee Loan Entry</h2>
                <hr />

                <div class="row">
                    {{-- company name input --}}
                    <div class="col-md-6">
                        <div class="row p-1">
                            <label for="company_name" class="col-sm-4 col-form-label">Company Name :</label>
                            <div class="col-sm-7">
                                <select class="form-select" name="company_id" id="companylist" aria-label="Default select example">
                                    <option selected >Select Company</option>

                                    @foreach($companyList as $comapnyLists)

                                    <option  value="{{$comapnyLists->company_id}}">{{$comapnyLists->company_name}}</option>
                                    @endforeach
                                    
                                </select>
                            </div>
                        </div>
                    </div>
                    {{-- Loan App No input --}}
                    <div class="col-md-6">
                        <div class="row p-1">
                            <label for="loan_app_no" class="col-sm-4 col-form-label">Loan App No :</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="loan_app_no" name="loan_app_no"
                                value="{{ old('loan_app_no') }}" disabled>
                              
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
                                <select class="form-select" name="emp_no" id="emp_no"
                                    aria-label="Default select example">
                              
                                </select>
                            </div>
                        </div>
                    </div>

                    {{--Employee Name input --}}
                    <div class="col-md-6">
                        <div class="row p-1">
                            <label for="emp_name" class="col-sm-4 col-form-label">Employee Name :</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="emp_name" name="emp_name"
                                    value="{{ old('emp_name') }}">
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
                                <select class="form-select" name="dept_no" id="dept_no"
                                    aria-label="Default select example">
                                    <option selected>Select One</option>
                                    
                                </select>
                            </div>
                        </div>
                    </div>


                    {{-- Designation input --}}
                    <div class="col-md-6">
                        <div class="row p-1">
                            <label for="designation" class="col-sm-4 col-form-label">Designation :</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="designation" name="designation"
                                    value="{{ old('designation') }}">
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
                                <input type="date" class="form-control" name="joining_date" id="joining_date"
                                    value="{{ old('joining_date') }}">
                            </div>
                        </div>
                    </div>



                    {{-- Section input --}}
                    <div class="col-md-6">
                        <div class="row p-1">
                            <label for="section_no" class="col-sm-4 col-form-label">Section :</label>
                            <div class="col-sm-7">
                                <select class="form-select" name="section_no" id="section_no"
                                    aria-label="Default select example">
                                    
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
                                <input type="number" class="form-control" name="gross_amount" id="gross_amount"
                                    value="{{ old('gross_amount') }}">
                            </div>
                        </div>
                    </div>

                    {{-- Loan Approved Date input --}}
                    <div class="col-md-6">
                        <div class="row p-1">
                            <label for="loan_approved_date" class="col-sm-4 col-form-label">Loan Approved Date :</label>
                            <div class="col-sm-7">
                                <input type="date" class="form-control" name="loan_approved_date"
                                    id="loan_approved_date" value="{{ old('loan_approved_date') }}">
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">

                     {{-- Sanction Amount input --}}
                     <div class="col-md-6">
                        <div class="row p-1">
                            <label for="sanction_amount" class="col-sm-4 col-form-label">Sanction Amount :</label>
                            <div class="col-sm-7">
                                <input type="number" class="form-control" name="sanction_amount" id="sanction_amount"
                                    value="{{ old('sanction_amount') }}">
                            </div>
                        </div>
                    </div>
                    {{-- Period input --}}
                    <div class="col-md-6">
                        <div class="row p-1">
                            <label for="period" class="col-sm-4 col-form-label">Period :</label>
                            <div class="col-sm-7">
                                <input type="number" class="form-control" name="period" id="period"
                                    value="{{ old('period') }}">
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
                                <input type="number" class="form-control" name="installment_size" id="installment_size"
                                    value="{{ old('installment_size') }}">
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
                                <input type="date" class="form-control" name="first_install_date"
                                    id="first_install_date" value="{{ old('first_install_date') }}">
                            </div>
                        </div>
                    </div>

                    {{-- Department name input --}}
                    <div class="col-md-6">
                        <div class="row p-1">
                            <label for="new_instt_date" class="col-sm-4 col-form-label">New Install Date :</label>
                            <div class="col-sm-7">
                                <input type="date" class="form-control" name="new_instt_date" id="new_instt_date"
                                    value="{{ old('new_instt_date') }}">
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
                                <input type="date" class="form-control" name="application_date" id="application_date"
                                    value="{{ old('application_date') }}">
                            </div>
                        </div>
                    </div>
                    {{-- New Period input --}}
                    <div class="col-md-6">
                        <div class="row p-1">
                            <label for="new_period" class="col-sm-4 col-form-label">New Period :</label>
                            <div class="col-sm-7">
                                <input type="number" class="form-control" name="new_period" id="new_period"
                                    value="{{ old('new_period') }}">
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
                                <input type="number" class="form-control" name="pre_loan_amount" id="pre_loan_amount"
                                    value="{{ old('pre_loan_amount') }}">
                            </div>
                        </div>
                    </div>

                    {{-- Pre Balance Amount input --}}
                    <div class="col-md-6">
                        <div class="row p-1">
                            <label for="pre_balance_amount" class="col-sm-4 col-form-label">Pre Balance Amount :</label>
                            <div class="col-sm-7">
                                <input type="number" class="form-control" name="pre_balance_amount"
                                    id="pre_balance_amount" value="{{ old('pre_balance_amount') }}">
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
                                <input type="text" class="form-control" name="ref_name" id="ref_name"
                                    value="{{ old('ref_name') }}">
                            </div>
                        </div>
                    </div>

                    {{-- Department name input --}}
                    <div class="col-md-6">
                        <div class="row p-1">
                            <label for="ref_des_name" class="col-sm-4 col-form-label">Ref Des Name :</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="ref_des_name" id="ref_des_name"
                                    value="{{ old('ref_des_name') }}">
                            </div>
                        </div>
                    </div>
                </div>
                <hr />
            </div>




            <div class="row-md-6 m-3 text-center">
                <button class="btn btn-success" type="submit" id="insert_btn">Save</button>
                <button class="btn btn-info" type="submit" id="submit_btn">Submit</button>
                <button class="btn btn-primary" type="button" id="chk_btn">Query</button>
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

    </form>
    </div>

    <div class="container">
        <table class="table table-striped table-sm table-center align-middle" id="maintb">
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script>
    $(function() {

        $("#period").on('keyup', function() {

            var sanctionAmount = parseInt($('#sanction_amount').val());
            var period = parseInt($('#period').val());
            var installmentsize = sanctionAmount / period;
            console.log(installmentsize);
            console.log(period);
            console.log(sanctionAmount);

            $('#installment_size').val(installmentsize);

        });
        //insert form data with ajax request


        $("#submit_btn").on('click', function(e) {
            e.preventDefault();
            var totalamount = (parseInt($('#sanction_amount').val()));
            var firdtInsDat = '31-07-2023';
            var installmonth = (parseInt($('#period').val()));
            
            var installAmount = totalamount / installmonth;
            $('#installment_size').val(installAmount);

            var ball = totalamount - installAmount;

            $('#maintb tr:last').after('<tr><td>' + '1' + '</td><td>' + totalamount +
                '</td><td id="installamounttd">' + installAmount + '</td><td>' + firdtInsDat +
                '</td><td  id="insamm">' + ball + '</td><td>' + 'Due' + '</td><td>' + 'Due' +
                '</td></tr>');
            var erty = parseInt($('table:first tr').find('#insamm').last().text())
            console.log(erty);
            if (!erty == '0') {
                for (let i = 1; i < installmonth; i++) {
                    // some code
                    var tt = parseInt($('table:first tr').find('#insamm').last().text());
                    var installamounttd = parseInt($('table:first tr').find('#installamounttd').last()
                        .text());

                    var ttamm = tt - installAmount;
                    var ttER = i + 1
                    $('#maintb tr:last').after('<tr><td>' + ttER + '</td><td>' + tt +
                        '</td><td id="installamounttd">' + installAmount + '</td><td>' +
                        firdtInsDat + '</td><td  id="insamm">' + ttamm + '</td><td>' + 'Due' +
                        '</td><td>' + 'Due' + '</td></tr>');
                    $(this).prop("disabled", true);

                }
            }
            console.log(tt);
        });


    });
    </script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <script>
    $("#insert_form").submit(function(e) {
        e.preventDefault();

        $.ajaxSetup({

            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        const fd = new FormData(this);
        console.log(fd);
        $.ajax({
            type: 'POST',
            url: 'loansave',
            data: fd,
            contentType: false,
            processData: false,
            dataType: 'json',
            complete: function(response) {
                
                $('#loan_app_no').text(response.loanno);

                console.log(response);

                if (response.status == 200) {
             
                   
                    var loanId=response.responseJSON.loan_no;
                      $('#loan_app_no').val(loanId);

            
                    Swal.fire(
                'Added!',
                'Employee Added Successfully!',
                'success',
            
              )

                }
            },
            error: function(response) {
                alert('dd');
                console.log(response);

            }
        });
    });
    </script>

<script>


    $(document).ready(function() {

    $(document).on('change','#companylist',function() {
      console.log(document);

      var comapnyID = $(this).val();
       
       if(comapnyID) {
           $.ajax({
               url: '/getEmp/'+comapnyID,
               type: "GET",
               data : {"_token":"{{ csrf_token() }}"},
               dataType: "json",
               success:function(data)
               {
                 if(data){
                   
                    $('#emp_no').append('<option hidden>Choose Employee</option>'); 
                    $.each(data, function(key, emp){

                   console.log(emp);
                   $('select[name="emp_no"]').append('<option value="'+ emp.empno +'">'+emp.empno+'</option>');

                 //     $('input[name="provision_period"]').val(""+emp.new_empno);
                    });
                }else{
                 
                }
             }
           });
       }else{


      }
    });

    });


</script>

<script>
     $(document).ready(function() {
      $(document).on('change','#emp_no',function() {
      console.log(document);

      var empID = $(this).val();
       
       if(empID) {
           $.ajax({
               url: '/getEmpData/'+empID,
               type: "GET",
               data : {"_token":"{{ csrf_token() }}"},
               dataType: "json",
               success:function(data)
               {
                 if(data){
                 
                    $.each(data, function(key, getEmpDet){
                      console.log(getEmpDet);

                        $('#emp_name').val(getEmpDet.empname);
                        $('#joining_date').val(getEmpDet.joining_date);
                        $('#gross_amount').val(getEmpDet.gross);
                        $('#designation').val(getEmpDet.designation_name);
                        // $('#designation').append('<option hidden>Choose Designation</option>'); 
                        // $('select[name="designation"]').append('<option value="'+ getEmpDet.designation_name +'">'+ getEmpDet.designation_name +'</option>');
                        $('#section_no').empty();
                        $('#section_no').append('<option hidden>Choose Section</option>');
                        $('select[name="section_no"]').append('<option value="'+ getEmpDet.section_no +'">'+ getEmpDet.section_no +'</option>');

                        $('#dept_no').empty();
                        $('#dept_no').append('<option hidden>Choose Dept</option>');
                        $('select[name="dept_no"]').append('<option selected value="'+ getEmpDet.dept_no +'">'+ getEmpDet.dept_name +'</option>');
                    });
                }else{
                //   $('#dept_no').append('<option >No Data</option>'); 
                }
             }
           });
       }else{
                //   $('#dept_no').append('<option >No Data</option>'); 
       }
    });

    });

</script>

<script>
    $(document).on('click','#chk_btn',function(e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var arrData = [];
                    $("#maintb tr").each(function(){
                    var currentRow = $(this);
                    var col1_value = currentRow.find("td:eq(0)").text();
                    var col2_value = currentRow.find("td:eq(1)").text();
                    var col3_value = currentRow.find("td:eq(2)").text();
                    var obj = {};
                    obj.col1=col1_value;
                    obj.col2=col2_value;
                    obj.col3=col3_value;
                    arrData.push(obj);
                });
                alert(arrData);
                console.log(arrData);
        $.ajax({
            type: 'POST',
            url: 'lonetablestore',
            data: arrData,
            contentType: false,
            processData: false,
            dataType: 'json',
            complete: function(response) {
                console.log(response);
                if (response.status == 200) {
                    
                Swal.fire(
                'Added!',
                'Employee Added Successfully!',
                'success',
                )
                }
            },
            error: function(response) {
                alert('dd');
                console.log(response);
            }
        });
    });
</script>

<script>
    // var loanId=response.responseJSON.loan_no;
                    //   $('#loan_app_no').val(loanId);

                    // var installAmount = totalamount / installmonth;
                    // $('#install_amount').val(installAmount);

                    // var totalamount = (parseInt($('#sanction_amount').val()));
                    // $('#pbbom').val(totalamount);

                    // var firdtInsDat = '31-07-2023';
                    // $('#install_date').val(firdtInsDat);

                    // var pbeom = totalamount - installAmount;
                    // $('#pbeom').val(pbeom);

                    // var installmonth = (parseInt($('#period').val()));
                    // for (let i = 1; i < installmonth; i++){
                    //     pbbom -= installAmount;
                    //     $('#pbbom').val(pbbom);

                    //     $('#install_amount').val(installAmount);
                    //     $('#install_date').val(firdtInsDat);

                    //     pbeom -= installAmount;
                    //     $('#pbeom').val(pbeom);
                    // }
</script>

</body>

</html>