<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link href="https://cdn.datatables.net/v/bs5/jq-3.6.0/jszip-2.5.0/dt-1.13.4/b-2.3.6/b-colvis-2.3.6/b-html5-2.3.6/datatables.min.css" rel="stylesheet"/>
</head>
<body>
   <div class="row">
    <form action="{{ route('store') }}" method="GET">
        @csrf
        <div class="container col-lg-6 text-left">
            <h2 class="p-2 text-center">Student Information</h2>

            <div class="mb-3 row">
                <label for="roll" class="col-sm-3 col-form-label">Roll No :</label>
                <div class="col-sm-8">
                    <input type="number" class="form-control" name="roll" id="roll" placeholder="Student Roll No"/>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="name" class="col-sm-3 col-form-label">Name:</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Student Name"/>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="email" class="col-sm-3 col-form-label">Email:</label>
                <div class="col-sm-8">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email Address"/>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="gender" class="col-sm-3 col-form-label">Gender :</label>
                <div class="col-sm-8">
                  <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" id="radio1" name="gender" value="option1">
                    <label class="form-check-label" for="radio1">Male</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" id="radio2" name="gender" value="option2">
                    <label class="form-check-label" for="radio2">Female</label>
                  </div>
                  <div class="form-check form-check-inline">
                     <input type="radio" class="form-check-input" id="radio3" name="gender" value="option3">
                     <label class="form-check-label" for="radio2">Others</label>
                  </div>
                </div>
              </div>

            <div class="mb-3 row">
                <label for="dob" class="col-sm-3 col-form-label">Date Of Birth:</label>
                <div class="col-sm-8">
                    <input type="date" class="form-control" name="dob" id="dob" placeholder=""/>
                </div>
            </div>

            <div class="row-md-6 m-3 text-center">
                <button class="btn btn-success" type="submit">Save</button>
                <button class="btn btn-warning" type="button">Edit</button>
                <button class="btn btn-danger" type="button">Clear</button>
                {{-- <button class="btn btn-primary" type="button">Clear</button> --}}
              </div>

        </div>
    </form>
   </div>


    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
</body>
</html>