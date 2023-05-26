<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script>
        function windowOpen(){
            window.open("http://localhost:68/new","_blank","height=500",width="500");
        }
    </script>

    <title>Attendance</title>
</head>
<body>
    <div class="container p-3">
       
        <form action="" method="">
            <div class="container col-lg-6 p-3">
                <h3 class="text-center">Attendance Details</h3>
                {{-- Company Name input --}}
                <div class="mb-3 row">
                    <label for="com_name" class="col-sm-3 col-form-label ">Company Name: </label>
                    <div class="col-sm-8">
                        <select class="form-control col-sm-6" id="company_name" name="company_name">
                            @foreach($company as $company)
                            <option value="{{ $company->company_id }}">{{ $company->company_name }}</option>
                            @endforeach
                        </select>
                     </div>
                </div>
            </div>
        </form>

        <div class="container" style="max-width: 3000px; max-height: 2000px;">
            <table id="attn" class="table table-bordered p-3" style="width:100%" >
                <thead class="bg-dark text-light" style="background-color:rgb(94, 21, 94)" >
                    <tr>
                        <th style="width:10%">Date</th>
                        <th style="width:10%">NEW EMP ID</th>
                        <th style="width:10%">Emp ID</th>
                        <th style="width:10%">In Time</th>
                        <th style="width:10%">In Time 2</th>
                        <th style="width:10%">Late</th>
                        <th style="width:10%">Out Time</th>
                        <th style="width:20%">Out Time2</th>
                        <th style="width:20%">OT</th>
                        <th style="width:20%">OT2</th>
                        <th style="width:20%">Extra OT</th>
                        <th style="width:20%">Status</th>
                        <th style="width:20%">Status2</th>
                        <th style="width:20%">Late Extra</th>
                    </tr>
                </thead>
                <tbody id="">
                
                </tbody>
            </table>
        </div>
        
        <div class="container col-lg-6 p-3">
            <hr/>
            <div class="row-md-6 m-3 text-center">
                <button class="btn btn-success" type="submit">Save</button>
                <button class="btn btn-warning" type="button">Edit</button>
                <button class="btn btn-danger" type="button">Clear</button>
                <button class="btn btn-primary" type="button">Clear</button>
            </div>
        </div>
    </div>
    


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
    $('#example').DataTable();
});
    </script>
</body>
</html>