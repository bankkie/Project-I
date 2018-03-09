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
     <div class="container-fluid">
  <li class="dropdown">
        <ul class="nav navbar-nav navbar-right">
      
      
    
       @if (Route::has('login'))

         <li class="active">
         @if (Auth::check())

          <li><button href="{{ Auth::user()->first_name }}" class="btn btn-basic navbar-btn" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> {{ Auth::user()->first_name }} <span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a href="/MyData">My Data</a></li>
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
         <li><a href="{{ url('/member') }}">Database</a></li>
         
              <li><a href="{{ url('/ShowVol')}}">Volunteer</a></li>
              <li><a href="{{ url('/show')}}">Activity</a></li>
              <li><a href="{{ url('/buddy') }}">Buddy</a></li>
              <li><a href="{{ url('/help') }}">Help</a></li>
              
              
          </ul>
        </div>
           <div class="h_search">
            <form action="search" method="POST">
              <input type="text" id="search" name="search" placeholder="search something...">
              {{{ csrf_field() }}}
              <input type="submit" name="submit" value="">
            </form>
        </div>
        <div class="clear"> </div>
      </div>
  </div>
</div>
<div class="container"><br><br>
<center><h1>Profile</h1></center>
<br><br>
<center><img src="layout/styles/home/images/user.png" width="200px" ></center><br><br>

@if (Auth::user()->Status == 'Student')
      <table>
  <tr><td>Name</td><td>{{ $members[0]->title }}&nbsp;{{$members[0]->first_name}}&nbsp;{{$members[0]->middle_name}}&nbsp;{{$members[0]->last_name}}</td></tr>
  <tr><td>E-mail</td><td>{{ $members[0]->email }}</td></tr>
  <tr><td>Country</td><td>{{ $members[0]->country }}</td></tr>
  <tr><td>EXP PASSPOT</td><td>{{ $members[0]->exp_passport }}</td></tr>
  <tr><td>EXP VISA</td><td>{{ $members[0]->exp_visa }}</td></tr>
  <tr><td>Status</td><td>{{ $members[0]->status }}</td></tr>
  <tr><td>Remarks</td><td>{{ $members[0]->remarks }}</td></tr>
  <tr><td>Phone</td><td>{{ $members[0]->phone }}</td></tr>
  <tr><td>Student ID</td><td>{{ $members[0]->std_id }}</td></tr>
  <tr><td>Birthday</td><td>{{ $members[0]->birthday }}</td></tr>
  <tr><td>Study Date</td><td>{{ $members[0]->study_date }}</td></tr>
  <tr><td>Category</td><td>{{ $members[0]->category }}</td></tr>
  <tr><td>Faculty</td><td>{{ $members[0]->faculty }}</td></tr>
  <tr><td>Section</td><td>{{ $members[0]->section }}</td></tr>
  <tr><td>Activity hour</td><td>{{ $members[0]->activity_hour }}</td></tr>
  <tr><td>Buddy</td><td>{{ $members[0]->buddy }}</td></tr>
  <tr><td>Facebook</td><td>{{ $members[0]->facebook }}</td></tr>
  <tr><td>Line</td><td>{{ $members[0]->line }}</td></tr>
  <tr><td>Hobby</td><td>{{ $members[0]->hobby }}</td></tr>
  <tr><td>Interests</td><td>{{ $members[0]->interests }}</td></tr>


@elseif (Auth::user()->Status == 'Staff')
<table>
<tr><td>Name</td><td>{{ $members[0]->title }}&nbsp;{{$members[0]->first_name}}&nbsp;{{$members[0]->middle_name}}&nbsp;{{$members[0]->last_name}}</td></tr>
  <tr><td>E-mail</td><td>{{ $members[0]->email }}</td></tr>
  <tr><td>Country</td><td>{{ $members[0]->country }}</td></tr>
  <tr><td>EXP PASSPOT</td><td>{{ $members[0]->exp_passport }}</td></tr>
  <tr><td>EXP VISA</td><td>{{ $members[0]->exp_visa }}</td></tr>
  <tr><td>EXP WP</td><td>{{ $members[0]->exp_wp }}</td></tr>
  <tr><td>SS Card</td><td>{{ $members[0]->ss_card }}</td></tr>
  <tr><td>Tax No</td><td>{{ $members[0]->tax_no }}</td></tr>
  <tr><td>Status</td><td>{{ $members[0]->status }}</td></tr>
  <tr><td>Remarks</td><td>{{ $members[0]->remarks }}</td></tr>
  <tr><td>Phone</td><td>{{ $members[0]->phone }}</td></tr>
  <tr><td>Student ID</td><td>{{ $members[0]->ext }}</td></tr>
  <tr><td>Birthday</td><td>{{ $members[0]->birthday }}</td></tr>
  <tr><td>Study Date</td><td>{{ $members[0]->begin_date }}</td></tr>
  <tr><td>Faculty</td><td>{{ $members[0]->faculty }}</td></tr>
  <tr><td>Buddy</td><td>{{ $members[0]->buddy }}</td></tr>
  <tr><td>Facebook</td><td>{{ $members[0]->facebook }}</td></tr>
  <tr><td>Line</td><td>{{ $members[0]->line }}</td></tr>
  <tr><td>Hobby</td><td>{{ $members[0]->hobby }}</td></tr>
  <tr><td>Interests</td><td>{{ $members[0]->interests }}</td></tr>


@elseif (Auth::user()->Status == 'Admin')
<table>
<tr><td>Name</td><td>{{Auth::user()->first_name}}&nbsp;{{Auth::user()->middle_name}}&nbsp;{{Auth::user()->last_name}}</td></tr>
  <tr><td>E-mail</td><td>{{ Auth::user()->email }}</td></tr>
  <tr><td>Country</td><td>{{ Auth::user()->country }}</td></tr>
@else

You have no rights to this section.

@endif

    

</body>
</html>

