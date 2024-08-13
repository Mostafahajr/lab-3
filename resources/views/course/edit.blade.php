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
            <a href="{{route('course.index')}}">
                <button class="btn btn-primary">
                    back
                </button>
            </a>
        </div>


        <form class="w-50 m-auto" action="{{route('course.update',$course)}}" enctype="multipart/form-data" method="post">
            @csrf
            @method('put')
            <input type="hidden" name="id" value="{{$course->id}}">
            <div class="mb-3">
                <label for="exampleInputuserName" class="form-label">course Name</label>
                <input type="text" name="name" value="{{$course->name}}" class="form-control" id="exampleInputName" >

            </div>
            <div class="mb-3">
                <label for="exampleInputNum" class="form-label">total</label>
                <input type="text" name="total" value="{{$course->total}}" class="form-control" id="exampleInputNum">
            </div>


            <div class="mb-3">
                <label for="exampleInputImage" class="form-label">Image</label>
                <input type="file" name="image" value="{{$course->image}}" class="form-control" id="exampleInputImage">
            </div>

            <div class="mb-3 d-flex justify-content-between align-items-center">

                <textarea name="desc" id="exampleInputDesc" cols="100" rows="10" placeholder="your description">{{$course->desc}}</textarea>
            </div>


                <button type="submit" class="btn btn-primary">Submit</button>

            </form>
    </div>
</body>
</html>
