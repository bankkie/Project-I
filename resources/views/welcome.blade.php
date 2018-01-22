<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>iSOS</title>
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
      <!---start-banner---->
      
        <div id="slider-wrapper">
  <div class="inner-wrapper">
    <input checked type="radio" name="slide" class="control" id="Slide1" />
    <label for="Slide1" id="s1"></label>
    <input type="radio" name="slide" class="control" id="Slide2" />
    <label for="Slide2" id="s2"></label>
    <input type="radio" name="slide" class="control" id="Slide3" />
    <label for="Slide3" id="s3"></label>
    <input type="radio" name="slide" class="control" id="Slide4" />
    <label for="Slide4" id="s4"></label>
    <div class="overflow-wrapper">
      <a class="slide" href=""><img src="layout/styles/home/images/s4.jpg"></a>
      <a class="slide" href=""><img src="layout/styles/home/images/s2.jpg" /></a>
      <a class="slide" href=""><img src="layout/styles/home/images/s1.jpg" /></a>
      <a class="slide" href=""><img src="layout/styles/home/images/s3.jpg" /></a>
    </div>
  </div>
</div>
<script  src="yout/styles/home/css/js/index.js"></script>
        </div>
            <!---slider---->
        <link rel="stylesheet" href="layout/styles/home/css/slippry.css">
        <script src="layout/styles/home/js/jquery-ui.js" type="text/javascript"></script>
        <script src="layout/styles/home/js/scripts-f0e4e0c2.js" type="text/javascript"></script>
        <script>
            jQuery('#jquery-demo').slippry({
            // general elements & wrapper
            slippryWrapper: '<div class="sy-box jquery-demo" />', // wrapper to wrap everything, including pager
            // options
            adaptiveHeight: false, // height of the sliders adapts to current slide
            useCSS: false, // true, false -> fallback to js if no browser support
            autoHover: false,
            transition: 'fade'
          });
        </script>
        <!---scrooling-script--->
          <!----//End-image-slider---->
          <div class="simple-text">
            <div class="wrap"><br>
              <h4>Welcome to Prince of Songkla University Phuket International Campus</h4>
              <p>**********************************************************************************</p>
            </div>
          </div>

      <div class="Recent-wroks"><!-- start services -->
        <div class="wrap">
        <div class="Recent-wrok">
          <h5 class="heading">Menu</h5>
          <!----start-img-cursual---->
          <div id="owl-demo" class="owl-carousel">
            <div class="item">
              <div class="cau_left">
                <div id="nivo-lightbox-demo"> <p> <a href="{{ url('/volunteer')}}" data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"> <span class="rollover"> </span></a> </p></div>
                <img src="layout/styles/home/images/b1.png" >
              </div>
              <div class="cau_left">
                <h4><a href="{{ url('/volunteer')}}">Volunteer</a></h4>
                
              </div>
            </div>
            <div class="item">
              <div class="cau_left">
                <div id="nivo-lightbox-demo"> <p> <a href="{{ url('/AllData')}}" data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"> <span class="rollover"> </span></a> </p></div>
                <img src="layout/styles/home/images/b2.png" >
              </div>
              <div class="cau_left">
                <h4><a href="{{ url('/AllData')}}">Data</a></h4>
                
              </div>
            </div>
            <div class="item">
              <div class="cau_left">
                <div id="nivo-lightbox-demo"> <p> <a href="{{ url('/buddy') }}" data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"> <span class="rollover"> </span></a> </p></div>
                <img src="layout/styles/home/images/b4.png" >
              </div>
              <div class="cau_left">
                <h4><a href="{{ url('/buddy') }}">Buddy</a></h4>
                
              </div>
            </div>
            <div class="item">
              <div class="cau_left">
                <div id="nivo-lightbox-demo"> <p> <a href="{{ url('/activity')}}" data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"> <span class="rollover"> </span></a> </p></div>
                <img src="layout/styles/home/images/b3.jpg" >
              </div>
              <div class="cau_left">
                <h4><a href="{{ url('/activity')}}">Activity</a></h4>
                
              </div>
            </div>
          
            <div class="item">
              <div class="cau_left">
                <div id="nivo-lightbox-demo"> <p> <a href="{{ url('/help') }}" data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"> <span class="rollover"> </span></a> </p></div>
                <img src="layout/styles/home/images/b6.png" >
              </div>
              <div class="cau_left">
                <h4><a href="{{ url('/help') }}">Help</a></h4>
                
              </div>
            </div>
           
          </div>
          <!----//End-img-cursual---->
        </div>
         <script type="text/javascript" src="layout/styles/home/js/nivo-lightbox.min.js"></script>
        <script type="text/javascript">
        $(document).ready(function(){
            $('#nivo-lightbox-demo a').nivoLightbox({ effect: 'fade' });
        });
        </script>
        </div>
        <div class="last_posts"><!-- start last_posts -->
        <div class="wrap">
          <h5 class="heading">Join Us</h5>
          <div class="l-grids">
            <div class="l-grid-1">
              <div class="desc">
                <h3>Volunteer Recruitment</h3>
               
                <p>รับสมัครนักศึกษาที่สนใจเป็นจิตอาสาเพื่อช่วยงานมหาวิทยาลัย</p>
                <p><a href="{{ url('/volunteer') }}">คลิกที่นี้</a></p>
              </div>
              <img src="layout/styles/home/images/V06.jpg">  
            
           
            <div class="clear"> </div>
          </div>
        </div>
      </div>
    
      </div>


      <div class="content_1">
        <div class="wrap">
          <div class="about">
        <div class="about-top">
          <div class="col span_1_of_about">
              <h3 class="heading">Activity</h3>
           
           
           
                <img src="layout/styles/home/images/AH1.jpg" title="name">
                 <h5><a href="{{ url('/activity3') }}">PSU is a multi-campus public university that was founded in 1967 and was the first university in southern Thailand.</a></h5>
                 <a href="{{ url('/activity3') }}" class="arrow_btn">Read More</a>
               <br>

                    
          
                <div class="clear"> </div>
                </div>
          </div>
          <div class="col span_1_of_about1">
            <h3 class="heading">NEWS</h3>
            <ul class="comments-custom unstyled">     
                <li class="comments-custom_li">
                <div class="icon"> </div>
                <div class="right-text">  
                  <a href="{{ url('/activityN1') }}"><h4 class="comments-custom_h">Recruit:</h4></a>
                    <div class="comments-custom_txt">
                      <a href="#" title="Go to this comment">Japan Student Buddies Recruitment</a>
                    </div>
                    <time>February 12 - May 5, 2018</time>
                </div>
                <div class="clear"> </div>
              </li>
              <li class="comments-custom_li">
                <div class="icon"> </div>
                <div class="right-text">  
                  <a href="{{ url('/activityN2') }}"><h4 class="comments-custom_h">English Camp 2018:</h4></a>
                    <div class="comments-custom_txt">
                      <a href="#" title="Go to this comment">On tour, learn English and join American volunteers.</a>
                    </div>
                    <time>Today until March 30, 2018</time>
                </div>
                <div class="clear"> </div>
              </li>
              
          </ul>
        </div>
          <div class="clear"> </div>
      </div>
      
               
            <div class="clear"></div> 
          </div>
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