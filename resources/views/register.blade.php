<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Register</title>
    <style>
        
        h1{
            text-align: left;
        }
        body{
            background: linear-gradient(90deg, rgba(159,218,215,1) 39%, rgba(223,163,215,1) 100%);
        }

    </style>
  </head>
  <body>
    <form action="{{ route('register') }}" method="POST">
    @csrf
    <div class="card-body">

    <div class="row">

    <div class="col-sm-8">
        <img src="registerImage.jpg" class="img-fluid rounded-start " width="2200" height="333" alt="register">
    </div>
    <div class="col-sm-4">
    <div class="card-body">
    <h1>Registration Form </h1><br><br>

        <div class="mb-3">        
            <label for="name" class="form-label">Name</label>
            <input class="form-control" type="text" name="name" id="name" required>
        </div>
        <div class="mb-3">        
            <label for="email" class="form-label">Email</label>
            <input class="form-control" type="email" name="email" id="email" required>
        </div>

        <div class="mb-3">        
            <label for="password" class="form-label">Password</label>
            <input class="form-control" type="password" name="password" id="password" required>
        </div>

        <div class="mb-3">        
            <label for="password_confirmation" class="form-label">Confirm Password</label>
            <input class="form-control" type="password" name="password_confirmation" id="password_confirmation" required>
        </div>

        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Register</button>
        </div>
    </div>
    </div>
    </div>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
