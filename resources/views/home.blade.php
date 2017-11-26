@extends('layouts.app')

@section('content')
<html>
<head>
<title>Escarine-Edu</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<link href="layout/styles/styles/layout.css" rel="stylesheet" type="text/css" media="all">

<link rel="stylesheet" href="layout/styles/styles/docs.theme.min.css">
<link rel="stylesheet" href="layout/styles/styles/owl.carousel.min.css">
<link rel="stylesheet" href="layout/styles/styles/owl.theme.default.min.css">
<script src="layout/styles/styles/js/jquery.min.js"></script>
<script src="layout/styles/styles/js/owl.carousel.js"></script>
    
    
    
    <!-- global styles -->
    
   

    <!-- scripts -->
    
        
    
<style>
div.ex1 {
    width:500px;
    height: 400px;
    margin: 20px;

}

div.ex2 {
    max-width:500px;
    margin: auto;
    border: 3px solid #73AD21;
}
</style>   
</head>
<body>

<div class="wrapper bgded overlay" >

  <div id="pageintro" class="hoc clear"> 
  
<div class="ex1">
  
</div>
</div>


<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
    <!-- ################################################################################################ -->

    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <div id="introblocks" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <ul class="nospace clear">
      <li>
        <article><a href="#"><i class="clg clg-planet-earth5"></i></a>
          <h4 class="heading underline center"><a href="#">Data</a></h4>
          <p>............................&hellip;</p>
        </article>
      </li>
      <li>
        <article><a href="#"><i class="clg clg-monument26"></i></a>
          <h4 class="heading underline center"><a href="#">Volunteer</a></h4>
          <p>............................&hellip;</p>
        </article>
      </li>
      <li>
        <article><a href="#"><i class="clg clg-microscopes2"></i></a>
          <h4 class="heading underline center"><a href="#">Activity</a></h4>
          <p>...........................&hellip;</p>
        </article>
      </li>
      <li>
        <article><a href="#"><i class="clg clg-university23"></i></a>
          <h4 class="heading underline center"><a href="#">Buddy</a></h4>
          <p>.............................&hellip;</p>
        </article>
      </li>
      <li>
        <article><a href="#"><i class="clg clg-monument26"></i></a>
          <h4 class="heading underline center"><a href="#">Assistance</a></h4>
          <p>.............................&hellip;</p>
        </article>
      </li>
      <li>
        <article><a href="#"><i class="clg clg-planet-earth5"></i></a>
          <h4 class="heading underline center"><a href="#">Aleat</a></h4>
          <p>.............................&hellip;</p>
        </article>
      </li>
    </ul>
    <!-- ################################################################################################ -->
    
  </div>
</div>
</body>
</html>
@endsection

