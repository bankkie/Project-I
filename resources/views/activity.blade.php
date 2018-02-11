
<!DOCTYPE HTML>
<html>
<head>
<title>Activity</title>
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
				//	The menu on the left
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
							
						</div>
					 	<div class="content span_2_of_single">
						   		<h5 class="blog_title">$_POST["title"]</h5>
								<div class="content">
									<div class="span-1-of-1">
										<a href="{{ url('/activity2') }}"><img class="m_img"  src="layout/styles/home/images/A3.jpg" alt=""/></a>
									</div>
									<div class="span-1-of-2">
						 				<p>3 Dec 2017 at 14.00: Dr.
Yeni Yuniawati, Head of Study Program, Universitas Pendidikan Indonesia and the team from UPI visited PSU Phuket to meet up with Indonesian students under the AIMS program.The ASEAN International Mobility for Students (AIMS) in 2017 has welcomed 5 students from Indonesia to study at PSU Phuket. Our campus also sent 10 Thai students to study in Indonesia for one semester commencing from August 2017 to December 2017.</p>
						 				<a href="{{ url('/activity2') }}" class="arrow_btn">Read More</a>
						 			</div>
						 			<div class="clear"></div>
								</div>	
								<div class="links">
									<h3 class="comments">By<a href="pages.html">&nbsp;IAC</a></h3>
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
						</div>
						<div class="clear"></div>
					</div>


					  <div class="wrapper_top">
						<div class="grid_1 alpha">
							<div class="date">
								<span>
									17
								</span>
								Sep 2017
							</div>
						</div>
					 	<div class="content span_2_of_single">
						   		<h5 class="blog_title"><a href="{{ url('/activity2') }}"> IAC PROJECT EXCURSION TO PHANG-NGA </a></h5>
								<div class="content">
									<div class="span-1-of-1">
										<a href="pages.html"><img class="m_img"  src="layout/styles/home/images/A1.png" alt=""/></a>
									</div>
									<div class="span-1-of-2">
						 				<p>On September 17th, IAC organized a one-day trip to Phang-Nga province visiting many tourist attractions including: Sarasin Bridge, PhangNga
Bay National Park (Panyee Island, Tham Lod, Ping Kan & James Bond Islands), Bang Phat Fisherman Village, and 360° View Point &
Water Park. Around 40 people (international/Thai staff and students) joined this excursion. We were so lucky to have great weather all
day long. The trip took us by bus and long-tail boat to very scenic locations in the bay, and a fantastic and plentiful seafood lunch.  </p>
						 				<a href="{{ url('/activity2') }}" class="arrow_btn">Read More</a>
						 			</div>
						 			<div class="clear"> </div>
								</div>	
								<div class="links">
									<h3 class="comments">By<a href="pages.html">&nbsp;IAC</a></h3>
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
						</div>
						<div class="clear"> </div>
					</div>
					
				
					<div class="wrapper_top">
						<div class="grid_1 alpha">
							<div class="date">
								<span>
									20
								</span>
								May 2016
							</div>
						</div>
					 	<div class="content span_2_of_single">
						   		<h5 class="blog_title"><a href="{{ url('/activity2') }}">The ICPC2016 World Finals in Phuket</a></h5>
								<div class="content">
									<div class="span-1-of-1">
										<a href="pages.html"><img class="m_img"  src="layout/styles/home/images/A2.jpg" alt=""/></a>
									</div>
									<div class="span-1-of-2">
						 				<p>The #ICPC2016 World Finals in Phuket, Thailand has officially come to a close. St. Petersburg State University took home the trophy. New friends were made, new cultures were experienced. A great time was had by all 128 team. </p>
						 				<a href="{{ url('/activity2') }}" class="arrow_btn">Read More</a>
						 			</div>
						 			<div class="clear"></div>
								</div>	
								<div class="links">
									<h3 class="comments">By<a href="pages.html">&nbsp;IAC</a></h3>
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
						</div>
						<div class="clear"> </div>
					</div>
					</div>		
			<div class="rsidebar span_1_of_3">
				
               
               
			 	
		        <div class="popularpost">
		        	<h4>Calender</h4>
		        	<div class="image_b">
		        		<a href="#"><img src="layout/styles/home/images/C1.jpg"/></a>
		        	</div>
		        	
		        </div>
		        
		        
		</div>
		
		<div class="clear"> </div>
	</div>	
	<div class="pages">
							<ul>
								<li class="preview"><a href="#"><span> </span></a></li>
								<li><a href="{{ url('/activity')}}">1 </a></li>
								<li><a href="{{ url('/activity')}}">2 </a></li>
								<li><a href="{{ url('/activity')}}">3 </a></li>
								<li><a href="{{ url('/activity')}}">4 </a></li>
								<li><a href="{{ url('/activity')}}">5 </a></li>
								<li><a href="#">.... </a></li>
								<li><a href="#">78</a></li>
								<li class="next"><a href="#"><span> </span></a></li>
								<div class="clear"> </div>
							</ul>
						</div>
<!----//End-content---->
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