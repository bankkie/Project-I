<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>volunteer</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>

<link href="layout/styles/home/css/style.css" rel="stylesheet" type="text/css" media="all" />

<link rel="stylesheet" type="text/css" href="layout/styles/home/css/magnific-popup.css">


<script type="text/javascript" src="layout/styles/home/js/jquery.min.js"></script>

</head>
<body>
<div class="header_bg">
<div class="wrap">
  <div class="header">
    <div class="logo">
      <a href="index.html">
        <img src="layout/styles/home/images/logo.png" alt=""/>
        
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
              <li><a href="about.html">Alert</a></li>
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
              <li><a href="about.html">Buddy</a></li>
              <li><a href="about.html">Alert</a></li>
              <li><a href="about.html">Help</a></li>
              
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
      <!---start-banner---->

      
       <div class="main">
<center>
      <div class="button">
						   	 <span><a href="{{URL::to('/InsertVolunteer')}}"><input type="submit" value="Register"></a></span>
						</div></center>


   	     <div class="wrap">
				 <div class="cont1 span_2_of_g1">
				      <div class="section group">
						<div class="col_1_of_about-box span_1_of_about-box">
								<div id="nivo-lightbox-demo"> <p> <a href="layout/styles/home/images/v11.jpg" data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"> <span class="rollover1"> </span></a> </p></div>     
							  	<img src="layout/styles/home/images/v1.jpg" alt="">
					    </div>
						<div class="col_1_of_about-box span_1_of_about-box">
						  	    <div id="nivo-lightbox-demo"> <p> <a href="layout/styles/home/images/v22.jpg" data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"> <span class="rollover1"> </span></a> </p></div>     
							  	<img src="layout/styles/home/images/v2.jpg" alt="">
					     </div>
						 <div class="col_1_of_about-box span_1_of_about-box">
						  		<div id="nivo-lightbox-demo"> <p> <a href="layout/styles/home/images/v33.jpg" data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"> <span class="rollover1"> </span></a> </p></div>     
							  	<img src="layout/styles/home/images/v3.jpg" alt="">
						</div>
					<div class="section group">
						<div class="col_1_of_about-box span_1_of_about-box">
								<div id="nivo-lightbox-demo"> <p> <a href="layout/styles/home/images/v44.jpg" data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"> <span class="rollover1"> </span></a> </p></div>     
							  	<img src="layout/styles/home/images/v4.jpg" alt="">
					    </div>
						<div class="col_1_of_about-box span_1_of_about-box">
						  	    <div id="nivo-lightbox-demo"> <p> <a href="layout/styles/home/images/v55.jpg" data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"> <span class="rollover1"> </span></a> </p></div>     
							  	<img src="layout/styles/home/images/v5.jpg" alt="">
					     </div>
						 <div class="col_1_of_about-box span_1_of_about-box">
						  		<div id="nivo-lightbox-demo"> <p> <a href="layout/styles/home/images/v66.jpg" data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"> <span class="rollover1"> </span></a> </p></div>     
							  	<img src="layout/styles/home/images/v6.jpg" alt="">
						</div>
				        <div class="clear"></div> 
					</div>
					<div class="section group">
						<div class="col_1_of_about-box span_1_of_about-box">
								<div id="nivo-lightbox-demo"> <p> <a href="layout/styles/home/images/v99.jpg" data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"> <span class="rollover1"> </span></a> </p></div>     
							  	<img src="layout/styles/home/images/v9.jpg" alt="">
					    </div>
						<div class="col_1_of_about-box span_1_of_about-box">
						  	    <div id="nivo-lightbox-demo"> <p> <a href="layout/styles/home/images/v77.jpg" data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"> <span class="rollover1"> </span></a> </p></div>     
							  	<img src="layout/styles/home/images/v7.jpg" alt="">
					     </div>
						 <div class="col_1_of_about-box span_1_of_about-box">
						  		<div id="nivo-lightbox-demo"> <p> <a href="layout/styles/home/images/v88.jpg" data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"> <span class="rollover1"> </span></a> </p></div>     
							  	<img src="layout/styles/home/images/v8.jpg" alt="">
						</div>
				        <div class="clear"></div> 
					</div>
					
				</div>
				   <script type="text/javascript" src="layout/styles/home/js/nivo-lightbox.min.js"></script>
				<script type="text/javascript">
				$(document).ready(function(){
				    $('#nivo-lightbox-demo a').nivoLightbox({ effect: 'fade' });
				});
				</script>
		</div>
		</div>
		</div>


      <div class="footer">
        <div class="wrap">
          <div class="footer-left">
            <h3>About eracle</h3>
            <p>.</p>
            <p>.</p>
          <div class="detail">
            <ul>
              <li><a href="#">home/</a></li>
              <li><a href="#">term of services/</a></li>
              <li><a href="#">license/</a></li>
              <li><a href="#">pess</a></li>
              <div class="clear"> </div>  
            </ul>
          </div>
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
            <h3>twitter</h3>
            <div class="comments1">
              <p.</p>
              <span>~12 hours ago</span>
            </div>
            <div class="comments1">
              <p>.</p>
              <span>~2 days ago</span>
            </div>
          </div>
          <div class="clear"> </div>  
        </div>
      </div>
      <div class="copy">
               <p>© 2014 Template by <a href="http://w3layouts.com" target="_blank">w3layouts</a></p>
        </div>
</body>
</html>