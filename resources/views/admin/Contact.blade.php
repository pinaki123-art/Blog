<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Personal Blog </title>
  <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
  <!-- Fonts -->
  <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body style="background-color: #E9F5FD">
  <nav class="navbar navbar-default" style="background-color: #C4E5FC">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle Navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">My Blog</a>
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li>
            <a href="{{ url('/') }}">Home</a>
          </li>
          <li><a href="{{ url('/') }}">Contact me</a></li>
          
        </ul>
        
        <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading" style="background-color: #C4E5FC">
            <h2>Contact Details</h2>
          </div>
          <div class="panel-body" style="background-color: #E9F5FD">
            <li>
            <a href="https://www.facebook.com/pinaki.bhowmick.92/">Facebook</a>
            </li>
            <li>
            <a href="https://twitter.com/bhowmick_pinaki">Twitter</a>
            </li>
            <li>
            <a href="/">bhowmickpinaki123@gmail.com</a>
            </li>
            <li>
            <a href="/">www.pinakibhowmick.in</a>
            </li>
            <!--<p style="margin-left: 200">.......................................................</p>!-->
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <p>Copyright © 2020 | <a href="/">Blog</a></p>
      </div>
    </div>
  </div>
  <!-- Scripts -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>

</html>
