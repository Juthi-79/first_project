<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- font awesome cdn --}}
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
     <style>
       .text-style:hover{
        text-decoration: underline;
       }
    </style> 
    <title>Address</title>
</head>
<body style="background-color:rgb(255, 224, 255)">

    <header style="background-color:rgb(94, 21, 94)">

       <div class="container">
        <h3 class="text-center text-white p-3"> Address Setup </h3>
    </div>
    </header>
    <div class="container">
        <div class="tab-contant" id="" > 

            @if( Session::get('status'))
            <div class="alert alert-success">
                {{Session::get('status')}}
            </div>
            @endif
            <form  action="{{route('insert')}}" class="form-group" method="post">
                     @csrf
                        <div class="mb-3 row">
                            <label for="city" class="col-sm-3 col-form-label">Name Of The City :</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="city" id="city" placeholder="name of the city"/>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="district" class="col-sm-3 col-form-label"> Name Of The District: </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="district" id="district" placeholder="Name of the district"/>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary bi bi-save2 p-2">Save</button>

            </from>
 
        </div>
    </div>

    <div class="container">
        <h2>List of City</h2>
        <table id="add_city" class="table table-striped">
            <thead>
                <tr>
                    <th>Name of the City</th>
                    {{-- <th>District of Bangladesh</th> --}}
                    <th>DELETE</th>
                    <th>EDIT</th>
                    
                </tr>
            </thead>
            @foreach($city as $ct)  
            <tbody>
                <tr>
                <td scope="row" id="city">{{$ct->city}}</td>
                {{-- <td scope="row" id="district">{{$dis->district}}</td> --}}
                <td scope="row"><a href="{{route('deleteCity',$ct->city)}}" class="btn btn-danger btn-info pull-right">Delete</a></td>
                <td scope="row"><button type="button" class="btn btn-info" id="edit_btn"data-toggle="modal"data-id='{{$ct->city}}' data-target="#exampleModalLong">Edit</tr>
                </tr>
                @endforeach
            </tbody> 
         </table> 
       </div>

       <div class="container">
        <h2>List of District</h2>
        <table id="add_dist" class="table table-striped">
            <thead>
                <tr>
                   
                    <th>District of Bangladesh</th>
                    <th>DELETE</th>
                    <th>EDIT</th>
                    
                </tr>
            </thead>
            @foreach($district as $dis)  
            <tbody>
                <tr>
                {{-- <td scope="row" id="city">{{$ct->city}}</td> --}}
                <td scope="row" id="district">{{$dis->district}}</td>
                <td scope="row"><a href="{{route('deleteDistrict',$dis->district)}}" class="btn btn-danger btn-info pull-right">Delete</a></td>
                <td scope="row"><button type="button" class="btn btn-info" id="edit_btn"data-toggle="modal"data-id='{{$dis->district}}' data-target="#exampleModalLong">Edit</tr>
                </tr>
                @endforeach
            </tbody> 
         </table> 
       </div>

</body>
</html>