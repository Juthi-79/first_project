<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script>
        function windowOpen(){
            window.open("http://localhost:68/new","_blank","height=500",width="500");
        }
    </script>
    <title>Increment Entry</title>

    <style>
        #button{
            text-align: right;
        }
        .scroll-bar{
            height: 150px;
            width:900px;
            overflow:auto;
        }
    </style>
</head>
<body>
    {{-- <div class=" p-3"> --}}
       
        <form action="" method="">
            <div class="container col-sm-6 p-3">
                <h3 class="text-center">Increment Entry</h3>

                <hr/>
                <div class="row">
                    {{-- emp no selection --}}
                    <div class="col-md-6">
                        <div class="row p-1">
                            <label for="empno" class="col-sm-5 col-form-label">Empno :</label>
                            <div class="col-sm-7">
                                <select class="form-select" id="empno" name="empno">
                                    @foreach($empnoList as $empnoList)
                                      <option value="{{$empnoList->empno}}">{{$empnoList->empno}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    {{-- Joining Date input --}}
                    <div class="col-md-6">
                        <div class="row p-1">
                            <label for="joining_date" class="col-sm-5 col-form-label">Joining Date :</label>
                            <div class="col-sm-7">
                                <input type="date" class="form-control" name="joining_date" id="joining_date" value="{{ old('joining_date') }}">
                            </div>
                        </div>
                    </div>
                </div>

                 <div class="row">
                    {{-- Name input --}}
                    <div class="col-md-6">
                        <div class="row p-1">
                            <label for="emp_name" class="col-sm-5 col-form-label">Emp Name :</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="emp_name" id="emp_name" value="{{ old('emp_name') }}" placeholder="Employee Name">
                            </div>
                        </div>
                    </div>

                    {{-- Department input --}}
                    <div class="col-md-6">
                        <div class="row p-1">
                            <label for="dept_name" class="col-sm-5 col-form-label">Department Name :</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="dept_name" id="dept_name" value="{{ old('dept_name') }}">
                            </div>
                        </div>                          
                    </div>
                </div>

                <div class="row">
                    {{--Designation Name input --}}
                    <div class="col-md-6">
                        <div class="row p-1">
                            <label for="designation_name" class="col-sm-5 col-form-label">Designation Name :</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="designation_name" id="designation_name" value="{{ old('designation_name') }}">
                            </div>
                        </div>
                    </div>

                    {{-- Section Name input --}}
                    <div class="col-md-6">
                        <div class="row p-1">
                            <label for="section_name" class="col-sm-5 col-form-label">Section Name :</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="section_name" id="section_name" value="{{ old('section_name') }}">
                            </div>
                        </div>                          
                    </div>
                </div>

                <div class="row">
                    {{-- Last Increment Date input --}}
                    <div class="col-md-6">
                        <div class="row p-1">
                            <label for="year" class="col-sm-5 col-form-label">Last Increment Date :</label>
                            <div class="col-sm-7">
                                <input type="date" class="form-control" name="year" id="year" placeholder="">
                            </div>
                        </div>                          
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-2" id="button">
                        <div class="row p-1">
                            <button class="btn btn-info" type="button" id="action">Action</button>
                        </div>                          
                    </div>
                </div>

        </form>
        <hr/>

    <div class="overflow-auto" style="max-width: 3000px; max-height: 2000px;">

        <table id="incr_entry" class="container table table-bordered p-3" style="width:100px">
            <thead class="bg-dark text-light ">
                <tr>
                    <th>Incr. Date</th>
                    <th>Empno</th>
                    <th>Prev. Designation</th>
                    <th>Curr. Designation</th>
                    <th>Prev Ot Ent</th>
                    <th>Curr Ot Ent</th>
                    <th>Prev Gross</th>
                    <th>Incr. Type</th>
                    <th>Incr Amount</th>
                    <th>Gross After Incr.</th>
                    <th>Remarks</th>
                    <th>Effective Date</th>
                    <th>Prev Basic </th>
                    <th>Prev House Rent</th>
                    <th>Prev Medical</th>
                    <th>Curr Basic</th>
                    <th>Curr House Rent</th>
                    <th>Curr Medical</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <form action="" method="">
                    <tr>
                        <td><input type="date" class="form-control" name="incr_date" id="incr_date" value="{{ old('incr_date') }}" placeholder=""></td>
                        <td><input type="text" class="form-control" name="empno" id="empno" value="{{ old('empno') }}" placeholder=""></td>
                        <td><input type="text" class="form-control" name="prev_designation" id="prev_designation" value="{{ old('prev_designation') }}" placeholder=""></td>
                        <td><input type="text" class="form-control" name="cur_designation" id="cur_designation" value="{{ old('cur_designation') }}" placeholder=""></td>
                        <td><input type="number" class="form-control" name="prev_ot_ent" id="prev_ot_ent" value="{{ old('prev_ot_ent') }}" placeholder="Prev Ot Ent"></td>
                        <td><input type="number" class="form-control" name="cur_ot_ent" id="cur_ot_ent" value="{{ old('cur_ot_ent') }}" placeholder=""></td>
                        <td><input type="number" class="form-control" name="prev_gross" id="prev_gross" value="{{ old('prev_gross') }}" placeholder=""></td>
                        <td><input type="text" class="form-control" name="incr_type" id="incr_type" value="{{ old('incr_type') }}" placeholder=""></td>
                        <td><input type="number" class="form-control" name="increment_amt" id="increment_amt" value="{{ old('increment_amt') }}" placeholder=""></td>
                        <td><input type="number" class="form-control" name="cur_gross" id="cur_gross" value="{{ old('cur_gross') }}"  placeholder=""></td>
                        <td><input type="text" class="form-control" name="remark_text" id="remark_text" value="{{ old('remark_text') }}" placeholder=""></td>
                        <td><input type="date" class="form-control" name="effective_date" id="effective_date" value="{{ old('effective_date') }}" ></td>
                        <td><input type="number" class="form-control" name="prev_basic" id="prev_basic" value="{{ old('prev_basic') }}" placeholder=""></td>
                        <td><input type="number" class="form-control" name="prev_house_rent" id="prev_house_rent" value="{{ old('prev_house_rent') }}" placeholder=""></td>
                        <td><input type="number" class="form-control" name="prev_medical" id="prev_medical" value="{{ old('prev_medical') }}" placeholder=""></td>
                        <td><input type="number" class="form-control" name="cur_basic" id="cur_basic" value="{{ old('cur_basic') }}" placeholder=""></td>
                        <td><input type="number" class="form-control" name="cur_house_rent" id="cur_house_rent" value="{{ old('cur_house_rent') }}" placeholder=""></td>
                        <td><input type="number" class="form-control" name="cur_medical" id="cur_medical" value="{{ old('cur_medical') }}" placeholder=""></td>
                        <td><button class="btn btn-success" type="submit" id="insert_btn">Save</button></td>
                    </tr>
                </form>
            </tbody>
        </table>
    </div>

            {{-- <hr/>
            <div class="row-md-6 m-3 text-center">
                <button class="btn btn-success" type="submit" id="insert_btn">Save</button>
                <button class="btn btn-info" type="submit" id="submit_btn">Submit</button>
                <button class="btn btn-primary" type="button" id="chk_btn">Query</button>
                <button class="btn btn-danger" type="button">Cancel</button>
            </div> --}}

        <hr/>
        <h3 class="text-center">Increment Info List</h3>
        <div class="overflow-auto" style="max-width: 3000px; max-height: 2000px;">
            <hr/>
            <table id="example1" class="table table-bordered p-3" style="width:100%" >
                <thead class="bg-dark text-light" style="background-color:rgb(94, 21, 94)" >
                    <tr>
                        <th style="text-align:center">Incr. Date</th>
                        <th style="text-align:center">Empno</th>
                        <th style="text-align:center">Prev Desig</th>
                        <th style="text-align:center">Curr Desig</th>
                        <th style="text-align:center">Prev Ot Ent.</th>
                        <th style="text-align:center">Curr Ot Ent.</th>
                        <th style="text-align:center">Prev Gross</th>
                        <th style="text-align:center">Incr Type</th>
                        <th style="text-align:center">Incr Amount</th>
                        <th style="text-align:center">Gross After Incr.</th>
                        <th style="text-align:center">Remarks</th>
                        <th style="text-align:center">Effective Date</th>
                        <th style="text-align:center">Prev Basic</th>
                        <th style="text-align:center">Prev House</th>
                        <th style="text-align:center">Prev Medical</th>
                        <th style="text-align:center">Curr Basic</th>
                        <th style="text-align:center">Curr House</th>
                        <th style="text-align:center">Curr Medical</th>
                        <th style="text-align:center">Action</th>
                    </tr>
                </thead>
                <tbody id="emp_inc">
                {{-- @include('incr_table') --}}
                </tbody>
            </table>
       
        
        {{-- <div class="container col-lg-6 p-3">
            <hr/>
            <div class="row-md-6 m-3 text-center">
                <button class="btn btn-success" type="submit">Save</button>
                <button class="btn btn-info" type="button">Add</button>
                <button class="btn btn-danger" type="button">Delete</button>
                <button class="btn btn-primary" type="button">Query</button>
                <button class="btn btn-warning" type="button">Exit</button>
            </div>
        </div> --}}


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
    $('#example').DataTable();
});
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    $(document).ready(function() {
    $('#empno').select2();
});
</script>

<script>
    $(document).ready(function(){
        $(document).on('change','#empno',function(){
            console.log(document);

            var empID = $(this).val();

            if(empID){
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
                                $('#designation_name').val(getEmpDet.designation_name);
                                $('#section_name').val(getEmpDet.section_no);
                                $('#dept_name').val(getEmpDet.dept_name);

                                // $('#dept_name').empty();
                                // $('#dept_name').append('<option hidden>Choose Dept</option>');
                                // $('select[name="dept_name"]').append('<option selected value="'+ getEmpDet.dept_no +'">'+ getEmpDet.dept_name +'</option>');
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
    $(document).ready(function(){
        $(document).on('click','#action',function(e){
        e.preventDefault();

        var empId= $('#empno').val();

            $.ajax({
            type: 'GET',
            url: '/tableData/'+empId,
            data: {"_token":"{{ csrf_token() }}"},
            success:function(data)
            {
                console.log(data);
                
                        $('#emp_inc').empty().html(data);

                        $(document).ready(function () {
                        $('#example1').DataTable();
                        
                    });
                
            },error:function(response){
                alert('error');
                console.log(response);
            }
        });
        
        
    });
    });
    
</script>
</body>
</html>