<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>add User</title>
</head>
<body>
    <div class="contanier-fluid mt-5">
        <div class="header d-flex justify-content-around align-items-center mb-5">
            <h2>add User</h2>
            <a href="{{route('students')}}">
                <button class="btn btn-primary">
                    back
                </button>
            </a>
        </div>


        <form class="w-50 m-auto" action="{{route('student.add')}}" enctype="multipart/form-data" method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleInputuserName" class="form-label">username</label>
                <input type="text" name="name" class="form-control" id="exampleInputName" >

            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail" class="form-label">email</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputAddress" class="form-label">Address</label>
                <input type="text" name="address" class="form-control" id="exampleInputAddress">
            </div>
            <div class="mb-3">
                <label for="exampleInputImage" class="form-label">Image</label>
                <input type="file" name="image" class="form-control" id="exampleInputImage">
            </div>
            <div class="mb-3 form-radio d-flex align-items-center">
                <input type="radio" name="gender" value="male" class="form-radio-input" id="exampleRadio1">
                <label class="form-radio-label me-3" for="exampleRadio1">male</label>
                <input type="radio" name="gender" value="female" class="form-radio-input" id="exampleRadio1">
                <label class="form-radio-label" for="exampleRadio1">female</label>
            </div>

                <button type="submit" class="btn btn-primary">Submit</button>

            </form>
    </div>

</body>
</html>
