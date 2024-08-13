<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Document</title>
    <style>
        .w-5.h-5{
            width: 15px
        }
        .image{
            width: 75px;
            height: 75px;
            background-position: center;
            background-size: cover;
            border-radius: 50%;
        }
        .flex-1{
            display: none;
        }
    </style>
</head>
<body>
    <div class="container text-center my-5">
        <div class="header d-flex justify-content-around align-items-center">
                  <h1>view courses</h1>
                  <a href="{{route('course.create')}}">
                      <button class="btn btn-primary">
                          add course
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
                <th scope="col">name</th>
                <th scope="col">total</th>
                <th scope="col">desc</th>
                <th scope="col">image</th>
                <th scope="col">action</th>

              </tr>
            </thead>
            <tbody>
              @foreach($courses as $course)

              <tr>
                <th scope="row">{{$course['id']}}</th>
                <td scope="row">{{$course['name']}}</td>
                <td scope="row">{{$course['total']}}</td>
                <td scope="row" class="w-50">{{$course['desc']}}</td>
                <td scope="row" class="">
                  <div class="image m-auto" style="background-image:url('{{url('/')}}/uploads/{{$course['image']}}')">

                  </div>

              </td>
                <td scope="row" >

                    <div class="d-flex justify-content-around align-items-center ">
                        <a href="{{route('course.show',$course->id)}}">
                            <button class="btn btn-warning">
                                view
                            </button>
                        </a>
                      <form action="{{route('course.destroy',$course)}}" method="post">
                          @method('DELETE')
                          @csrf
                            <button class="btn btn-danger">
                                delete
                            </button>
                      </form>


                        <a href="{{route('course.edit',$course->id)}}">
                            <button class="btn btn-success">
                                update
                            </button>
                        </a>
                    </div>

                </td>
              </tr>
              @endforeach


          </tbody>
      </table>
      {{$courses->links()}}

    </div>
</body>
</html>
