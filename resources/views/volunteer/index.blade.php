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
    <style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #ede982;
    color: black;
}
</style>
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
            <form action="searchvol" method="POST">
              <input type="text" id="search" name="search" placeholder="search something...">
              {{{ csrf_field() }}}
              <input type="submit" name="submit" value="">
            </form>
        </div>
        <div class="clear"> </div>
      </div>
  </div>
</div>
 <div id="slider-wrapper">
  <div class="inner-wrapper">
    <input checked type="radio" name="slide" class="control" id="Slide1" />
    <label for="Slide1" id="s1"></label>
    <input type="radio" name="slide" class="control" id="Slide2" />
    <label for="Slide2" id="s2"></label>
    <input type="radio" name="slide" class="control" id="Slide3" />
    <label for="Slide3" id="s3"></label>
   
    <div class="overflow-wrapper">
      <a class="slide" href=""><img src="http://www.psupix.com/wp-content/uploads/2016/07/IMG_5239.jpg"></a>
      <a class="slide" href=""><img src="https://scontent.fbkk15-1.fna.fbcdn.net/v/t1.0-9/28467678_553593848347781_7613706320509504623_n.jpg?_nc_cat=0&_nc_eui2=v1%3AAeEu6h2mv3LNqcOyxLrsvy7MF0BgehOrW7G-kgfGmBilq-R1t7GPPgatDjZawgzAncc1yTym2-vEWGzwn9fZZJ842T3fIpxRC94ObgLp-vQeLw&oh=f5a5e3eec17cca8e1d08731c5ad9bc4d&oe=5B5CC7FE" /></a>
      <a class="slide" href=""><img src="https://scontent.fbkk15-1.fna.fbcdn.net/v/t1.0-9/23795641_10155128396432828_3880467612952296408_n.jpg?_nc_cat=0&_nc_eui2=v1%3AAeHw34H122BzQ_cIpr099HmH0B0iCeJJqNdvZAlpzA7ZYZnFD3YNaVkMPAg2wm84q1UZIQaLxpODrCYnST0Ezygl0RmO815Xu8dlyVEX5t9fRA&oh=9c871915c265159bfb902ebcdeb9b10f&oe=5B59A769" /></a>
     
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

<div class="container">
<div class="row">

    <div class="col-lg-12">


        
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Volunteer List </h2>
                    <!--<form action="{{ URL::to('importExcel') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
      <input type="file" name="import_file" />
      <button class="btn btn-info">Import File</button>
    </form>-->

                </div>
                

                <br><br>
                              <div class="pull-right">
                    <a class="btn btn-warning" href="{{ url('/InsertVolunteer') }}"> Join Us</a>&nbsp;&nbsp;
                </div>

                
           </div>
                </div>
            </div>
        </div><br><br>
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <table class="table table-striped task-table">
                    <!-- Table Headings -->
                    <thead>
                    <tr>
                        <th width="20%" align="center">studentID</th>
                        <th width="15%">Name</th>
                        <th width="15%">nickname</th>
                        <th width="15%">E-Mail</th>
                        <th width="15%">Action</th>
                          </tr>
                    </thead>
    
                    <!-- Table Body -->
                    <tbody>
                    @foreach($volunteers as $volunteer)
                        <tr>
                           
                            <td class="table-text">
                                <div>{{$volunteer->std_id}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$volunteer->name}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$volunteer->nickname}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$volunteer->email}}</div>
                            </td>
                            

                       
                            <td>
                                <a href="{{ url('/volunteer/details', $volunteer->id) }}" class="label label-success">Details</a>
                                @if (Auth::check())
                        @if (Auth::user()->Status == 'Admin')
                                <a href="{{ url('/volunteer/edit', $volunteer->id) }}" class="label label-warning">Edit</a>
                                <a href="{{ route('volunteer.delete', $volunteer->id) }}" class="label label-danger" onclick="return confirm('Are you sure to delete?')">Delete</a>
                                @endif
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    </tbody>                
                    </table>
                   

            </div>
            
              <center><div class="paginate wrapper">
       
            {!! $volunteers->render() !!}
        
    </div></center>
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

