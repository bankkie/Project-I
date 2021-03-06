
<!DOCTYPE HTML>
<html>
<head>
<title>Activity</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<meta property="og:url"           content="https://www.your-domain.com/your-page.html" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="Your Website Title" />
  <meta property="og:description"   content="Your description" />
  <meta property="og:image"         content="https://www.your-domain.com/path/image.jpg" />

<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>



<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="{{ asset('js/share.js') }}"></script>


<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>


<link href="layout/styles/home/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="layout/styles/home/css/magnific-popup.css">
<link rel="stylesheet" href="layout/styles/home/css/paginate.css">
<link href="layout/styles/home/css/style.css" rel="stylesheet" type="text/css" media="all" />

<link rel="stylesheet" type="text/css" href="layout/styles/home/css/magnific-popup.css">

<!--login-->
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--login-->



<script type="text/javascript" src="layout/styles/home/js/jquery.min.js"></script>


<script type="text/javascript" src="layout/styles/home/js/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/activity.css">
<script type="text/javascript" src="js/activity.js"></script>
<script
.hide-bullets {
list-style:none;
margin-left: -40px;
margin-top:20px;
}
</script>
<script> jQuery(document).ready(function($) {
 
        $('#myCarousel').carousel({
                interval: 5000
        });
 
        $('#carousel-text').html($('#slide-content-0').html());
 
        //Handles the carousel thumbnails
       $('[id^=carousel-selector-]').click( function(){
            var id = this.id.substr(this.id.lastIndexOf("-") + 1);
            var id = parseInt(id);
            $('#myCarousel').carousel(id);
        });
 
 
        // When the carousel slides, auto update the text
        $('#myCarousel').on('slid.bs.carousel', function (e) {
                 var id = $('.item.active').data('slide-number');
                $('#carousel-text').html($('#slide-content-'+id).html());
        });
});</script>

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
            <form action="searchac" method="POST">
              <input type="text" id="search" name="search" placeholder="search something...">
              {{{ csrf_field() }}}
              <input type="submit" name="submit" value="">
            </form>
        </div>
        <div class="clear"> </div>
      </div>
  </div>
</div>
<body>



<div class="row">
    <div class="col-lg-12">
        
        <div class="row">
            <div class="col-lg-12 margin-tb">
              
              
@if (Auth::check())
                        @if (Auth::user()->Status == 'Admin')
                <div class="pull-right">

             <br> <a class="btn btn-danger" href="{{URL::to('/file')}}">Add Activity</a>&nbsp;&nbsp;
              </div>

              <div class="pull-right">

             <br> <a class="btn btn-primary" href="{{URL::to('/announce')}}">Add News</a>&nbsp;&nbsp;
              </div>
                     @endif    @endif         

                </div>
          </div>
          </div>
      






 @foreach($user as $users)

    <div class="main">
            <div class="wrap"> 
                <div class="single-top">
       
                 <div class="wrapper_single">
                 

                      <div class="wrapper_top">
                        <div class="grid_1 alpha">
                            <div class="date">{{$users->title}}</div>
                        </div>
                            <div class="content span_2_of_single">
                            <h5 class="blog_title"><a href="#"> {{$users->title}}</a></h5>
                            <div class="content">
                                    <div class="span-1-of-4">
                                    
                                        <div class="carousel slide article-slide" id="article-photo-carousel">

  <!-- Wrapper for slides -->
                                      <div class="carousel-inner cont-slider"> 

                                        <div class="item active">
                                          <img alt="" title="" src="{{$users->img1}}">
                                        </div>
                                        <div class="item">
                                          <img alt="" title="" src="{{$users->img2}}">
                                        </div>
                                         <div class="item">
                                          <img alt="" title="" src="{{$users->img3}}">
                                        </div>
                                       
                                      </div>
                                       <!-- Indicators -->
                                      <ol class="carousel-indicators">
                                        <li class="active" data-slide-to="0" data-target="#article-photo-carousel">
                                          <img alt="" src="{{$users->img1}}">
                                        </li>
                                        <li class="" data-slide-to="1" data-target="#article-photo-carousel">
                                          <img alt="" src="{{$users->img2}}">
                                        </li>
                                        <li class="" data-slide-to="1" data-target="#article-photo-carousel">
                                          <img alt="" src="{{$users->img3}}">
                                        </li>
                                      </ol>
                                    </div>
                                        
                                    </div><br>

                                <div class="span-4-of-4">
                                <p>{{$users->detial}}</p>
                                      
                                        
                                    </div>
                 <iframe src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Fweb3.phuket.psu.ac.th%2Fisosadmin%2Fshow&layout=button_count&size=large&mobile_iframe=true&width=77&height=28&appId" width="77" height="28" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                
                                    <div class="clear"> </div>
                                </div>  


                            
                                </div>
                        </div>
                        <div class="clear"> </div>
                    </div><br>
                    
                
               
        
                
                
        </div>
         
        <div class="clear"> </div>
    </div>  

    </div>
</div>  


@endforeach


<div class="paginate wrapper"><!-- The "wrapper" is just a comestic addition. You don't need this for the pagination to work. -->
       
            {!! $user->render() !!}
        
    </div>
    </class="active">
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