<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
 <ul class="list-group text-center w-50 bordered m-auto">
        <li class="list-group-item"><b>id</b> : {{$student['id']}}</li>
        <li scope="row" class="">
            image:
            <div class="image m-auto" style="background-image:url('{{url('/')}}/uploads/{{$student['image']}}')">

            </div>

        </li>
        <li class="list-group-item"><b>name</b> : {{$student['name']}}</li>
        <li class="list-group-item"><b>address</b> : {{$student['address']}}</li>
        <li class="list-group-item"> <a href="{{route('students')}}">
            @if($student->track)
            <li><a href="{{route('tracks.show',$student->track_id)}}">{{ $student->track->name}}</a></li>
            @endif
            <button class="btn btn-warning">
                back
            </button>
        </a></li>

    </ul>


</body>
</html>
