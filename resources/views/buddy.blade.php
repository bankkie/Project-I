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
<!--login-->
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--login-->

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
    <link type="text/css" rel="stylesheet" href="layout/styles/home/css/jquery.mmenu.all.css" />
    <script type="text/javascript" src="layout/styles/home/js/jquery.mmenu.js"></script>
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
        <img src="layout/styles/home/images/U1.png" alt=""/>
        
        <div class="clear"> </div>
       </a>
    </div>
    <div class="container-fluid">
  <li class="dropdown">
        <ul class="nav navbar-nav navbar-right">
      
      
    
       @if (Route::has('login'))

         <li class="active">
         @if (Auth::check())

          <li><button href="{{ Auth::user()->first_name }}" class="btn btn-basic navbar-btn" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> {{ Auth::user()->first_name }} <span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a href="{{ url('/MyData') }}">My Data</a></li>
            <li><a href="{{ url('/member/edituser', Auth::user()->id) }}">Edit Profile</a></li>
            <li><a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form></li>
           
          </ul>
           
        </li>

                            
                                   
        
          @else
         <li> <button class="btn btn-basic navbar-btn"><a href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></button>
          @endif
         @endif
         </ul></li>
      
    </div>

    <div class="clear"></div>
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
              <li><a href="{{ url('/member') }}">Data</a></li>

              <li><a href="{{ url('/ShowVol')}}">Volunteer</a></li>
              <li><a href="{{ url('/show')}}">Activity</a></li>
              <li><a href="{{ url('/buddy') }}">Buddy</a></li>
              <li><a href="{{ url('/posts') }}">Help</a></li>
             
            </ul>
          </nav>
      </div>
    <!------start-768px-menu---->
      <div class="header_sub">
        <div class="h_menu">
          <ul>
          <li class="active"><a href="{{ url('/home') }}">Home</a></li>
         <li><a href="{{ url('/member') }}">Database</a></li>
         
              <li><a href="{{ url('/ShowVol')}}">Volunteer</a></li>
              <li><a href="{{ url('/show')}}">Activity</a></li>
              <li><a href="{{ url('/buddy') }}">Buddy</a></li>
              <li><a href="{{ url('/posts') }}">Help</a></li>
              
              
          </ul>
        </div>
           <div class="h_search">
            <form action="searchbuddy" method="POST">
              <input type="text" id="search" name="search" placeholder="search something...">
              {{{ csrf_field() }}}
              <input type="submit" name="submit" value="">
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
					
							<h3 class="heading">Buddy</h3>
							<div class="section group">
@foreach($students as $student)

                

								<div class="grid_1_of_4 images_1_of_4">

						 			<div class="image"><a href="#"><img src="{{$student->photo_add}}" alt="" width="300" height="200"></a>
                  </div>
						 			<h4><a href="">{{$student->title}}&nbsp;{{$student->first_name}}&nbsp;{{$student->middle_name}}&nbsp;{{$student->last_name}}</a> </h4>
						 			<h6>Facebook:&nbsp;{{$student->facebook}} &nbsp;&nbsp;&nbsp;&nbsp;Line:&nbsp;&nbsp;{{$student->line}}</h6>
						 			<p><li>{{$student->hobby}}&nbsp;&nbsp;,&nbsp;&nbsp;{{$student-> interests}}</li> </p>
						 			
								</div>

								
                 @endforeach


								<div class="clear"> </div>
								</div>
					</div>
          <center><div class="paginate wrapper">
       
            
          {!! $students->render() !!}
				</div></center>
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