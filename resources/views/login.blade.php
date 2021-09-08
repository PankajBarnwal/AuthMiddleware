<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">WebSiteName</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="/">Home</a></li>
                <li class="active"><a href="/login">Login</a></li>
                <li><a href="/about">About Us</a></li>
                <li><a href="#">Page 3</a></li>
            </ul>
        </div>
    </nav>
    <div class="container">
    @if (session('msg'))
    <div class="alert alert-success" id="alert">
      <button class="close" data-dismiss="alert">X</button>
      {{session('msg')}}
    </div>
    @endif
        <form action="login" method="post">
            @csrf<br>
            <h2 class="text-info"><u> Login Form</u></h2>
            <div class="form-group">
                <input type="text" name="username" class="form-control" placeholder="Enter username">
                <span class="text-danger">@error('username'){{$message}}@enderror</span>

            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Enter password">
                <span class="text-danger">@error('password'){{$message}}@enderror</span>

            </div>
            <button class="btn btn-primary" name="submit">Submit</button>
            <!-- &nbsp;&nbsp;<a href="/register">New user?register here</a> -->
        </form>
    </div>
</body>

</html>