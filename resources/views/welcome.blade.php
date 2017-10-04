<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title>iSOS</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<link href="layout/styles/assets/css/bootstrap.min.css" rel="stylesheet">
<link href="layout/styles/assets/css/font-awesome.min.css" rel="stylesheet">
<link href="layout/styles/assets/css/style.css" rel="stylesheet">
<link href="layout/styles/assets/css/animate.css" rel="stylesheet">
<link href="layout/styles/assets/css/skin-blue.css" rel="stylesheet">
<!-- Le fav -->
<link rel="shortcut icon" href="layout/styles/assets/ico/icon.png">

</head>
<!-- /head-->
<body data-spy="scroll" data-target=".navbar">
<nav id="topnav" class="navbar navbar-fixed-top navbar-default" role="navigation">
<div class="container">

  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav navbar-right">
        @if (Route::has('login'))
         <li class="active">
         @if (Auth::check())
          <a href="{{ url('/home') }}">Home</a>
        @else
        
        <li><a href="{{ url('/login') }}">Login</a></li>
        <li><a href="{{ url('/register') }}">Register</a></li>
         @endif
         </li>
         @endif
      </ul>
    </nav>
    <!-- ################################################################################################ -->
  /div>
</nav>
<!-- HOMEPAGE -->
<header id="top-section" class="fullbg">
<div class="jumbotron">
  <div id="carousel_intro" class="carousel slide fadeing">
    <div class="carousel-inner">
      <div class="active item" id="slide_1">
        <div class="carousel-content">          
          <div class="animated fadeInDownBig">
          <h1>iSOS</h1>
          <h1>_____________________</h1>
             <h1>International Student One Stop Service</h1>
          </div>
          <br/>

          
        </div>
      </div>
      <div class="item" id="slide_2">
        <div class="carousel-content">          
          <div class="animated fadeInDownBig">
              <h1>iSOS</h1>
              <h1>_____________________</h1>
             <h1>International Student One Stop Service</h1>
          </div>
          <br/>

          
        </div>
      </div>
      <div class="item" id="slide_3">
        <div class="carousel-content">          
          <div class="animated fadeInDownBig">
             <h1>iSOS</h1>
              <h1>_____________________</h1>
             <h1>International Student One Stop Service</h1>  
          </div>
            <br/>

        </div>
      </div>
    </div>
  </div>
  <button class="left carousel-control" href="#carousel_intro" data-slide="prev" data-start="opacity: 0.6; left: 0%;" data-250="opacity:0; left: 5%;"><i class="fa fa-chevron-left"></i></button>
  <button class="right carousel-control" href="#carousel_intro" data-slide="next" data-start="opacity: 0.6; right: 0%;" data-250="opacity:0; right: 5%;"><i class="fa fa-chevron-right"></i></button>
</div>

<script src="layout/styles/assets/js/jquery.min.js" type="text/javascript"></script>
<script src="layout/styles/assets/js/bootstrap.js"></script>
<script src="layout/styles/assets/js/jquery.parallax-1.1.3.js" type="text/javascript"></script>
<script src="layout/styles/assets/js/jquery.localscroll-1.2.7-min.js" type="text/javascript"></script>
<script src="layout/styles/assets/js/jquery.scrollTo-1.4.6-min.js" type="text/javascript"></script>
<script src="layout/styles/assets/js/jquery.bxslider.min.js"></script>
<script src="layout/styles/assets/js/jquery.placeholder.js"></script>
<script src="layout/styles/assets/js/modernizr.custom.js"></script>
<script src="layout/styles/assets/js/toucheffects.js"></script>
<script src="layout/styles/assets/js/animations.js"></script>
<script src="layout/styles/assets/js/init.js"></script>

</body>
</html>