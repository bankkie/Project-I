<!DOCTYPE html>
<!--
Template Name: Escarine-Edu
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html>
<head>
<title>iSOS</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">

<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    
    <nav id="mainav" class="fl_right">
      <ul class="clear">
        @if (Route::has('login'))
         <li class="active">
         @if (Auth::check())
          <li><a href="{{ url('/home') }}">Home</a></li>
        @else
        
        <li><label><a href="{{ url('/login') }}">Login</a></label></li>
        <li><a href="{{ url('/register') }}">Register</a></li>
         @endif
         </li>
         @endif
      </ul>
    </nav>
    <!-- ################################################################################################ -->
  </header>
</div>
<div class="wrapper bgded overlay">
  <div id="pageintro" class="hoc clear"> 

  <article>
      <h3 class="heading underline center">iSOS</h3>
      <p>International Student One Stop Service</p>

    </article>
  </div>
</div>




</body>
</html>