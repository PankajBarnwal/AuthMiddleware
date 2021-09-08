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
      <li ><a href="/">Home</a></li>
      @if (!session('UserData'))
      <li><a href="/login">Login</a></li>
      @endif
      <li class="active"><a href="/about">About Us</a></li>
      @if(Session::get('UserData'))
                <li><a><span>Welcome | {{Session::get('UserData')}}</span></a></li>
                <li>
                    <a class="btn btn-info" href="/logout" style="color: white; width:90px" >Logout</a>
                </li>
                @else
                @endif
    </ul>
  </div>
</nav>
<div class="container">
    <h2>About Page</h2>
           </div>
</body>
</html>
