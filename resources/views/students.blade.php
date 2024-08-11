<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Document</title>
    <style>
        .image{
            height:50px;
            width:50px;
            background-position: center;
            background-size: cover;

        }
    </style>
</head>
<body>
    <div class="container text-center my-5">
      <div class="header d-flex justify-content-around align-items-center">
                <h1>view Students</h1>
                <a href="{{route('student.create')}}">
                    <button class="btn btn-primary">
                        add user
                    </button>
                </a>
      </div>
      @if (isset($response))
      @dump($response);
  @endif
        <table class="table w-100 m-auto my-4">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">First</th>
              <th scope="col">Last</th>
              <th scope="col">Handle</th>
            </tr>
          </thead>
          <tbody>
            @foreach($students as $student)

            <tr>
              <th scope="row">{{$student['id']}}</th>
              <td scope="row">{{$student['name']}}</td>
              <td scope="row">{{$student['address']}}</td>
              <td scope="row" class="">
                <div class="image m-auto" style="background-image:url('{{url('/')}}/uploads/{{$student['image']}}')">

                </div>

            </td>
              <td scope="row">
                <a href="/students/{{$student['id']}}">
                    <button class="btn btn-warning">
                        view
                    </button>
                </a>
                <a href="{{route('student.delete',$student['id'])}}">
                    <button class="btn btn-danger">
                        delete
                    </button>
                </a>
                <a href="{{route('student.update',$student['id'])}}">
                    <button class="btn btn-success">
                        update
                    </button>
                </a>

              </td>
            </tr>
            @endforeach


        </tbody>
    </table>

  </div>


</body>
</html>
