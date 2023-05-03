

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class="full">
<div class="container">
    <div class="row">
         
          <div class="col-md-4 offset-md-4">
            <div class="card form-holder">
                <div class="card-body">
                    <h2>Login Here</h2>

                    @if(Session::has('error'))
                      <p class="text-danger">{{Session::get('error')}}</p>
                      @endif

                      @if(Session::has('success'))
                      <p class="text-success">{{Session::get('success')}}</p>
                      @endif

                      <form action="{{url('loginpost')}}" method="POST">
                        @csrf
                        @method('post')
                        <div class="form-group">
                            <label id="label">Username</label>
                            <input type="email" name="email" class="form-control" placeholder="username">
                            @if($errors->has('username'))
                      <p class="text-danger">{{$errors->first('username')}}</p>
                      @endif
                        </div> 
                        <div class="form-group">
                            <label id="label">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="password">
                            @if($errors->has('password'))
                      <p class="text-danger">{{$errors->first('password')}}</p>
                      @endif
                        </div>
                        <div class="row">
                            <div class="col-8 text-left">
                                <a href="#" class="btn btn-link">Forgot Password</a>
                            </div>
                            <div class="col-4 text-right">
                                <input type="submit" class="btn btn-primary" value="login">
                            </div>
                        </div>

                      </form>
                </div>
            </div>
          </div>
    </div>
</div>
</div>
</body>
</html>
