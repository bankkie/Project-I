<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>activity more</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<link href="layout/styles/home/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="layout/styles/home/css/magnific-popup.css">
<script type="text/javascript" src="layout/styles/home/js/jquery.min.js"></script>
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

<div class="blog">
  <div class="main">
        <div class="wrap">
        <div class="single-top">
         <div class="wrapper_single">
            <div class="wrapper_top">
            <div class="grid_1 alpha">
              <div class="date">
                <span>
                  5
                </span>
                May 2018
              </div>
            </div>
            <div class="content span_2_of_single">
                  <h5 class="blog_title"><a href="#">Japan Student Buddies Recruitment</a></h5>
                  <div class="links">
                  <h3 class="comments">By<a href="bloginner.html">&nbsp;IAC</a></h3>
                  <h3 class="comments"><a href="#">Phuket</a></h3>
                  <h3 class="tags">Tags: <a href="#">Design</a>,<a href="#">Creative</a>,<a href="#"></a></h3>
                  <h3>Share</h3>
                  <h3>
                    <div class="social_1">
                      <ul>  
                          <li class="icon1_t"><a href="#"><span> </span></a></li>
                          <li class="icon2_f"><a href="#"><span> </span></a></li>   
                        </ul>
                    </div>
                  </h3>
                  <div class="clear"> </div>
                </div>
                <div class="content">
                  <div class="span-1-of-1">
                    <a href="#"><img class="m_img"  src="layout/styles/home/images/N1.jpg" alt=""/></a>
                  </div>
                  <div class="span-1-of-2">
                    <p></p>
                  </div>
                  <div class="clear"> </div>
                </div>  
                <div class="para para_2">
                  <p>February 12 - May 5, 2018, King Mongkut's University of Technology North Bangkok<br>

Receive hours of activity:<br>
Developing Consciousness: Moral, Ethical, and Discipline.<br>
Social skills development<br>
Development of intercultural understanding<br>
15 hours for each type<br><br>

** Student ID and contact number.<br>
For more information, please visit International Trade Center (IAC), Office of the President (Building 7), 2nd Floor
Call 076-276096-7 or the Mind iacpsu@gmail.com </p>
                </div>
                
                <h6 class="text"><a href="#"></a></h6>
                <h3 class="heading_1">Share With Youir Friends</h3>
                <div class="share_icons">
                  <a href="#"><img src="images/share_icon1.png"/></a>
                 </div>
                <div class="grid_2_page">
                  <ul>
                    <li class="preview"><a href="#"><span> </span></a></li>
                    <li><a href="#">Previous Post </a></li>
                    <li><a href="#">Next Post</a></li>
                    <li class="next"><a href="#"><span> </span></a></li>
                    <div class="clear"> </div>
                  </ul>
                </div>
                
                    
                    
          </div>
          </div>
          <div class="clear"> </div>
        </div>
        <div class="rsidebar span_1_of_3">
        
               
            
          
            
    </div>
        <div class="clear"> </div>
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