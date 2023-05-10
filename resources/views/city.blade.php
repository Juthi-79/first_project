<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Showing City</title>

    {{-- font awesome cdn --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    
    <div class="row">
        <form id="insertData" enctype="multipart/form-data">
            @csrf
            <div class="container col-lg-6 text-left p-2">
                <h2 class="text-center p-3">City Setup</h2>

                {{-- city input --}}
                <div class="mb-3 row">
                    <label for="city" class="col-sm-3 col-form-label">City :</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="city" id="city" value="{{ old('city') }}" placeholder="Enter City"/>
                    </div>
                </div>
    
                {{-- district input --}}
                <div class="mb-3 row">
                    <label for="district" class="col-sm-3 col-form-label">District :</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="district" id="district" value="{{ old('city') }}" placeholder="Enter District"/>
                    </div>
                </div>

                {{-- action buttons --}}
                <hr/>
                <div class="row-md-6 m-3 text-center">
                    <button class="btn btn-success " type="submit" id="insertBtn">Save</button>
                </div>

                {{-- <div class="card-body" id="show_all_city">
                    <h1 class="text-center text-secondary my-5">Loading...</h1>
                </div> --}}

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

        //add new city ajax request
        $("#insertData").submit(function(e){
            e.preventDefault();
            const fd = new FormData(this);

            $.ajax({
                url: '{{ route('c.store') }}',
                method: 'post',
                data: fd,
                cache: false,
                contentType: false,
                enctype: 'multipart/form-data',

                processData: false,
                dataType: 'json',
                complete: function(response){
                    if(response.status == 200){
                        Swal.fire(
                            'Inserted!',
                            'Student Inserted Successfully!',
                            'success'
                        )
                        fetchAllCity();
                    }
                    $("#insertBtn").text('Add Student');
                    $("#insertData")[0].reset();
                }
            });
        });

        fetchAllCity();

        //show all city data
        function fetchAllCity(){
                $.ajax({
                    url: '{{ route('fetchAll') }}',
                    method: 'get',
                    success: function(response){
                        $("#show_all_city").html(response);
                        $("table").DataTable({
                            order: [0, 'desc']
                        });
                    }
                });
            }
     });
   </script>
</body>
</html>