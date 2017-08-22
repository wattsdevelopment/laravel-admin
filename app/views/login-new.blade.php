<link href="{{ asset('/css/login-window.css') }}" rel="stylesheet">
<link href="{{ asset('/js/login-window.js') }}" rel="javascript">


<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Invoice Hub Login</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

</head>

<body>

<div class="pen-title">

<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">Invoice Hub</h1>

      <form name="form1" method="post" action="check-login.php">
          <input name="myusername" type="text" id="myusername" placeholder="Username">
          <input name="mypassword" type="password" id="mypassword" placeholder="Password">
          <div class="submit">
              <button type="button" onclick="window.location='{{ url("home") }}'">Button</button>
              <!--<input type="submit" name="Submit" value="Login">-->
          </div>

      </form>





    {{--<form name="form1" method="POST">--}}
      {{--<div class="input-container">--}}
        {{--<input id="myusername" name="myusername"/>--}}
        {{--<label>Username</label>--}}
        {{--<div class="bar"></div>--}}
      {{--</div>--}}
      {{--<div class="input-container">--}}
        {{--<input id="mypassword" name="mypassword"/>--}}
        {{--<label>Password</label>--}}
        {{--<div class="bar"></div>--}}
      {{--</div>--}}
      {{--<div class="button-container">--}}
          {{--<input type="submit" name="Submit" value="Login">--}}
         {{--<!-- -->--}}
      {{--</div>--}}
      {{--<div class="footer"><a href="#">Forgot your password?</a></div>--}}
    {{--</form>--}}
  </div>

</div>
    </div>


</body>

</html>


