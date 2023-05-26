<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Student</title>

     {{-- font awesome cdn --}}
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
     <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">

     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
 
</head>

{{-- add new student modal start --}}
<div class="modal fade" id="addStudentModal" tabindex="-1" aria-labelledby="exampleModalLabel" data-bs-backdrop="static" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Student</h5>
        <button type="button" class="btn-close" aria-label="Close"></button>
      </div>
      <form id="insert_form2" enctype="multipart/form-data" >
        @csrf
        <div class="container col-lg-6 text-left">
            {{-- <h2 class="p-2 text-center">Student Information</h2> --}}

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
                    <input type="radio" class="form-check-input" id="radio1" name="gender" value="male">
                    <label class="form-check-label" for="radio1">Male</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" id="radio2" name="gender" value="female">
                    <label class="form-check-label" for="radio2">Female</label>
                  </div>
                  <div class="form-check form-check-inline">
                     <input type="radio" class="form-check-input" id="radio3" name="gender" value="others">
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

        </div>
    </form>
    </div>
  </div>
</div>
{{-- add new student modal end --}}

<body>
   <div class="row">
    <form id="insert_form" enctype="multipart/form-data" >
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
                    <input type="radio" class="form-check-input" id="radio1" name="gender" value="male">
                    <label class="form-check-label" for="radio1">Male</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" id="radio2" name="gender" value="female">
                    <label class="form-check-label" for="radio2">Female</label>
                  </div>
                  <div class="form-check form-check-inline">
                     <input type="radio" class="form-check-input" id="radio3" name="gender" value="others">
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
                <button class="btn btn-success " type="submit" id="insert_btn">Save</button>
                <button class="btn btn-warning" type="button">Edit</button>
                <button class="btn btn-danger" type="button">Clear</button>
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

              <div class="card-body" id="show_all_students">
                <h1 class="text-center text-secondary my-5">Loading...</h1>
              </div>

        </div>
    </form>
   </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   
   <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
   <script>

        $(function(){

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            //add new student ajax request
            $("#insert_form").submit(function(e){
                e.preventDefault();
                const fd = new FormData(this);

                $.ajax({
                    url: '{{ route('store') }}',
                    method: 'post',
                    data: fd,
                    cache: false,
                    contentType: false,
                    enctype: 'multipart/form-data',

                    processData: false,
                    dataType: 'json',
                    complete: function(response){
                        if(response.status == 200){
                            swal.fire(
                                'Inserted!',
                                'Student Inserted Successfully!',
                                'success'
                            )
                            fetchAllStudents();
                        }
                        $("#insert_btn").text('Add Student');
                        $("#insert_form")[0].reset();
                    }
                });
            });

          //edit student ajax request
          $('body').on('click', '.editIcon', function(e){
            e.preventDefault();

            let id = $(this).attr('roll');
            $s.ajax({
              url: '{{ route('edit') }}',
              method: 'get',
              data: {
                id: id,
                _token: '{{ csrf_token() }}'
              },
              success:function(response){
                $("#roll").val(response.roll);
                $("#name").val(response.name);
                $("#email").val(response.email);
                $("#designation").val(response.designation);
                $("#address").val(response.address);
              }
            });
          });

            // delete student ajax request
      $('body').on('click', '.deleteIcon', function(e) {
        e.preventDefault();
        
        let roll = $(this).attr('roll');
      
        let csrf = '{{ csrf_token() }}';
        Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
          if (result.isConfirmed) {
            alert(roll);
            $.ajax({
              url: "{{ route('delete',".roll.") }}",
              method: 'get',
              data: {
                id: roll,
                _token: csrf
              },
              success: function(response) {
                console.log(response);
                Swal.fire(
                  'Deleted!',
                  'Your file has been deleted.',
                  'success'
                )
                fetchAllStudents();
              }
            });
          }
        });

      
      });

            fetchAllStudents();

            function fetchAllStudents(){
                $.ajax({
                    url: '{{ route('fetchAll') }}',
                    method: 'get',
                    success: function(response){
                        $("#show_all_students").html(response);
                        $("table").DataTable({
                            order: [0, 'asc']
                        });
                    }
                });
            }
        });
    </script>
</body>
</html>