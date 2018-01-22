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
                  30
                </span>
                March 2018
              </div>
            </div>
            <div class="content span_2_of_single">
                  <h5 class="blog_title"><a href="#">PSU is a multi-campus public university that was founded in 1967</a></h5>
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
                    <a href="#"><img class="m_img"  src="layout/styles/home/images/AH1.jpg" alt=""/></a>
                  </div>
                  <div class="span-1-of-2">
                    <p></p>
                  </div>
                  <div class="clear"> </div>
                </div>  
                <div class="para para_2">
                  <p>PSU is a multi-campus public university that was founded in 1967 and was the first university in southern Thailand. PSU consists of five campuses that are strategically located across the southern Thailand region with PSU Hat Yai serving as its main campus. To date, the university is comprised of 39 faculties, colleges and institutes; four hospitals; and more than 40 centers of excellence and research centers. PSU has approximately 42,000 students in total, wherein PSU Phuket campus has more than 3,200 students, including around 160 international students from over 20 various countries.<br><br>

We currently offer 14 international programs in three faculties and one school as follows:<br><br>

I. Faculty of Hospitality and Tourism (FHT): http://www.fht.psu.ac.th/fht/index.php/en/<br><br>

1) Bachelor of Business Administration (BBA) in Hospitality Management<br>
2) Bachelor of Business Administration (BBA) in Tourism Management<br>
3) Bachelor of Business Administration (BBA) in Service Innovation Management<br>
4) Master of Business Administration (MBA) in Hospitality and Tourism Management<br><br>

II. Faculty of International Studies (FIS): http://www.fis.psu.ac.th/en/<br><br>

5) Bachelor of Arts (BA) in International Business: China<br>
6) Bachelor of Arts (BA) in Chinese Studies<br>
7) Bachelor of Arts (BA) in International Studies: Korea<br>
8) Bachelor of Arts (BA) in Thai Studies<br>
9) Bachelor of Arts (BA) in European Studies: English-French<br>
10) Master of Arts (MA) in Chinese Studies<br><br>

III. Faculty of Technology and Environment (FTE): https://te.psu.ac.th/en/<br><br>

11) Master of Science (MS) in Environmental Management Technology<br>
12) Doctor of Philosophy (PhD) in Environmental Management Technology<br><br>

IV. Interdisciplinary Graduate School of Earth System Science and Andaman Natural Disaster Management (ESSAND): http://www.essand.psu.ac.th/ESSAND/index.html<br><br>

13) Master of Science (MS) in Earth System Science<br>
14) Doctor of Philosophy (PhD) in Earth System Science<br><br>

For more information, please visit or contact us:<br>

Website: http://www.phuket.psu.ac.th/en/<br>
Facebook: https://www.facebook.com/phuketcampus/<br>
Youtube: PSU Phuket Channel<br>
Phone: International Affairs Centre (IAC): +66-76-276-014, +66-76-276-524<br>
Email: iacpsu@phuket.psu.ac.th, iacpsu@gmail.com</p>
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