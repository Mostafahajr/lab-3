<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="contanier-fluid mt-5">
        <div class="header d-flex justify-content-around align-items-center mb-5">
            <h2>add Track</h2>
            <a href="{{route('students')}}">
                <button class="btn btn-primary">
                    back
                </button>
            </a>
        </div>


        <form class="w-50 m-auto" action="{{route('tracks.add')}}" enctype="multipart/form-data" method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleInputuserName" class="form-label">Track Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputName" >

            </div>
            <div class="mb-3">
                <label for="exampleInputNum" class="form-label">Student Num</label>
                <input type="text" name="num" class="form-control" id="exampleInputNum">
            </div>


            <div class="mb-3">
                <label for="exampleInputImage" class="form-label">Image</label>
                <input type="file" name="image" class="form-control" id="exampleInputImage">
            </div>


                <button type="submit" class="btn btn-primary">Submit</button>

            </form>
    </div>
</body>
</html>
