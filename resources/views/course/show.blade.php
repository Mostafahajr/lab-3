<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div scope="row" class="">

            <div class="image m-auto" style="background-image:url('{{$course['image']}}')">

            </div>

        </div>
        <ul class="list-group text-center w-50 bordered m-auto">
            <li class="list-group-item"><b>id</b> : {{$course['id']}}</li>

            <li class="list-group-item"><b>name</b> : {{$course['name']}}</li>
            <li class="list-group-item"><b>degree</b> : {{$course['total']}}</li>
            <li class="list-group-item"><b>description</b> : {{$course['desc']}}</li>

            <li class="list-group-item"> <a href="{{route('course.index')}}">
                <button class="btn btn-warning">
                    back
                </button>
            </a></li>

        </ul>

    </div>
</body>
</html>









