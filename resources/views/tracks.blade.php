<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Document</title>
    <style>
         .image{
            height:50px;
            width:50px;
            background-position: center;
            background-size: cover;

        }
        .w-5.h-5{
            width: 10px;
        }
        .hidden{
           display: none;
        }
    </style>
</head>
<body>
    <div class="container text-center my-5">
        <div class="header d-flex justify-content-around align-items-center">
                  <h1>view Tracks</h1>
                  <a href="{{route('tracks.create')}}">
                      <button class="btn btn-primary">
                          add Track
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
                <th scope="col">image</th>
                <th scope="col">Handle</th>
              </tr>
            </thead>
            <tbody>
              @foreach($tracks as $track)

              <tr>
                <th scope="row">{{$track['id']}}</th>
                <td scope="row">{{$track['name']}}</td>
                <td scope="row">{{$track['studentNum']}}</td>
                <td scope="row" class="">
                  <div class="image m-auto" style="background-image:url('{{url('/')}}/uploads/{{$track['image']}}')">

                  </div>

              </td>
                <td scope="row">
                   <a href="/tracks/view/{{$track['id']}}">
                      <button class="btn btn-warning">
                          view
                      </button>
                  </a>

                  <a href="{{route('track.delete',$track['id'])}}">
                      <button class="btn btn-danger">
                          delete
                      </button>
                  </a>

                  <a href="{{route('track.update',$track['id'])}}">
                      <button class="btn btn-success">
                          update
                      </button>
                  </a>

                </td>
              </tr>
              @endforeach


          </tbody>
      </table>
      {{$tracks->links()}}

    </div>

</body>
</html>
