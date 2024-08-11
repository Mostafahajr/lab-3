<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Document</title>
    <style>
.image{
        height:300px;
        width:300px;
        background-position: center;
        background-size: cover;

    }
    </style>

</head>
<body>
    <div class="container">
        <div scope="row" class="">
            image:
            <div class="image m-auto" style="background-image:url('{{url('/')}}/uploads/{{$track['image']}}')">

            </div>

        </div>
        <ul class="list-group text-center w-50 bordered m-auto">
            <li class="list-group-item"><b>id</b> : {{$track['id']}}</li>

            <li class="list-group-item"><b>name</b> : {{$track['name']}}</li>
            <li class="list-group-item"><b>Num</b> : {{$track['studentNum']}}</li>
            <li class="list-group-item"> <a href="{{route('tracks')}}">
                <button class="btn btn-warning">
                    back
                </button>
            </a></li>

        </ul>

    </div>



</body>
</html>
