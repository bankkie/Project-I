<!DOCTYPE html>
<html>
<head>
	<title>Buddy</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>

<link href="layout/styles/home/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="layout/styles/home/css/owl.carousel.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="layout/styles/home/css/magnific-popup.css">

 <link rel="stylesheet" href="layout/styles/home/css/style2.css">
<script type="text/javascript" src="layout/styles/home/js/jquery.min.js"></script>
<script src="layout/styles/home/js/owl.carousel.js"></script>
  <script>
      $(document).ready(function() {
        $("#owl-demo").owlCarousel({
          items : 4,
          lazyLoad : true,
          autoPlay : true,
          navigation : true,
          navigationText : ["", ""],
          rewindNav : false,
          scrollPerPage : false,
          pagination : false,
          paginationNumbers : false,
        });
      });
    </script>
    <!-- //Owl Carousel Assets -->
    <!-----768px-menu----->
    <link type="text/css" rel="stylesheet" href="css/jquery.mmenu.all.css" />
    <script type="text/javascript" src="js/jquery.mmenu.js"></script>
      <script type="text/javascript">
        //  The menu on the left
        $(function() {
          $('nav#menu-left').mmenu();
        });
    </script>
    <!-----//768px-menu----->
</head>
<body>
<!-- start header -->
<div class="header_bg">
<div class="wrap">
  <div class="header">
    <div class="logo">
      <a href="index.html">
        <img src="layout/styles/home/images/lgo.png" alt=""/>
        
        <div class="clear"> </div>
       </a>
    </div>
    <div class="text">
       @if (Route::has('login'))
         <class="active">
         @if (Auth::check())

          <a href="{{ url('/home') }}">Home</a>
        @else
        
        <a href="{{ url('/login') }}">Login</a>&nbsp; &nbsp; 
        <a href="{{ url('/register') }}">Register</a>
         @endif
         
         @endif
    </div>
    <div class="clear"> </div>
  </div>
</div>
</div>
<!-- start header -->
<div class="header_btm">
  <div class="wrap">
    <!------start-768px-menu---->
      <div id="page">
          <div id="header">
            <a class="navicon" href="#menu-left"> </a>
          </div>
          <nav id="menu-left">
            <ul>
              <li class="active"><a href="{{ url('/home') }}">Home</a></li>
              <li><a href="{{ url('/AllData') }}">Data</a></li>

              <li><a href="{{ url('/AllData') }}">Volunteer</a></li>
              <li><a href="blog.html">Activity</a></li>
              <li><a href="about.html">Buddy</a></li>
              <li><a href="about.html">Help</a></li>
              <li><a href="contact.html">Contact us</a></li>
            </ul>
          </nav>
      </div>
    <!------start-768px-menu---->
      <div class="header_sub">
        <div class="h_menu">
          <ul>
          <li class="active"><a href="{{ url('/home') }}">Home</a></li>
         <li><a href="{{ url('/AllData') }}">Data</a></li>
         
              <li><a href="{{ url('/volunteer')}}">Volunteer</a></li>
              <li><a href="{{ url('/activity')}}">Activity</a></li>
              <li><a href="{{ url('/buddy') }}">Buddy</a></li>
              <li><a href="{{ url('/help') }}">Help</a></li>
              
          </ul>
        </div>
        <div class="h_search">
            <form>
              <input type="text" value="" placeholder="search something...">
              <input type="submit" value="">
            </form>
        </div>
        <div class="clear"> </div>
      </div>
  </div>
</div>

</head>
<body>

<div class="content_1">
				<div class="wrap">
					<div class="about">
				<div class="about-top">
					<div class="col span_1_of_about">
							<h3 class="heading">Buddy</h3>
							<div class="section group">

								<div class="grid_1_of_4 images_1_of_4">
						 			<div class="image"><a href="#"><img src="layout/styles/home/images/prs1.jpg"></a></div>
						 			<h4><a href="#">Adrian Thomas</a> </h4>
						 			<h6>FHT</h6>
						 			<p><li>Music</li> </p>
						 			<p><li>Travel</li> </p>
								</div>

								<div class="grid_1_of_4 images_1_of_4">
									<div class="image"><a href="#"><img src="layout/styles/home/images/prs2.jpg"></a></div>
									 <h4><a href="#">Narate Ketram</a></h4>
									 <h6>FIS</h6>
									 <p><li>Adventure</li> </p>
						 			<p><li>Shopping</li> </p>
								</div>


								<div class="clear"> </div>
								</div>
					</div>
				
					<div class="clear"> </div>
			</div>
			
								
						<div class="clear"></div> 
					</div>
			  </div>
		</div>
		</div>
				</div>
			
					<div class="footer">
        <div class="wrap">
          <div class="footer-left">
            <h3>Contect</h3>
            <p>Prince Of Songkla University Phuket Campus</p>
            <p>International Affairs Centre</p>
         
          <div class="soc_icons soc_icons1">
              <ul>
                <li><a class="icon1" href="#"> </a> </li>
                <li><a class="icon2" href="#"> </a></li>
                <li><a class="icon3" href="#"> </a></li>
                <div class="clear"> </div>  
              </ul>
                
          </div>
          </div>
          <div class="footer-right">
            
            <div class="comments1">
              
            </div>
          </div>
          <div class="clear"> </div>  
        </div>
      </div>
      <div class="copy">
               <p>Ratchadaporn Noonil & Jaturong Jaiyen <a href="http://w3layouts.com" target="_blank">Enjoy&Bankkie</a></p>
        </div>



</body>
</html>