
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
      <a href="{{ url('/home') }}">
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
            <li><a href="/MyData">My Data</a></li>
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
         
              <li><a href="{{ url('/volunteer')}}">Volunteer</a></li>
              <li><a href="{{ url('/show')}}">Activity</a></li>
              <li><a href="{{ url('/buddy') }}">Buddy</a></li>
              <li><a href="{{ url('/posts') }}">Help</a></li>
              
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

  

<table class="responstable">
@extends('layouts.app')

@section('content_1')
  
</table>

<font color="#000000"> <center>The graph shows the relationship between number of people and country.<br>
*******************************************************************************************</center></font>

<canvas id="myChart" style="height:20vh; width:30vw"></canvas>
<script>
var ctx = document.getElementById("myChart").getContext('2d');
var i = 0;
var lab = new Array (1);
var d = new Array (1);
@foreach($vars as $var)
lab[i] = "{{$var->country}}";
d[i] = "{{$var->user_count}}";
i++;
@endforeach
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: lab,
        datasets: [{
            label: 'People',
            data: d,
            backgroundColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',

                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',

                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',

                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',

                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'

            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',

                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',

                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',

                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',

                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',

                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
 </script>
<style type="text/css">
table {
    width:50%;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;
}
table#t01 tr:nth-child(even) {
    background-color: #eee;
}
table#t01 tr:nth-child(odd) {
   background-color:#fff;
}
table#t01 th {
    background-color: #00543f;
    color: white;
}
</style>


 <font color="#000000"> 



<br><center><table id="t01">
<caption>All Statistic(Country)</caption>

  <tr><th>Count(id)</th><th>Country</th></tr>
  @foreach($memcous as $memcou)
  <tr>
    <td>{{$memcou->user_count}}</td>
    <td>{{$memcou->country}}</td>
  </tr>
  @endforeach
  
</table></center>

<br><center><table id="t01">
<caption>All Statistic (status)</caption>

  <tr><th>Count(id)</th><th>Status</th></tr>
  @foreach($memstts as $memstt)
  <tr><td>{{$memstt->user_count}}</td><td>{{$memstt->status}}</td></tr>
  @endforeach
</table></center>

<br><center><table id="t01">
<caption>Staff Statistic (Country)</caption>

  <tr><th>Count(id)</th><th>Country</th></tr>
  @foreach($stfcous as $stfcou)
  <tr><td>{{$stfcou->user_count}}</td><td>{{$stfcou->country}}</td></tr>
  @endforeach
</table></center>


<br><center><table id="t01">
<caption>Staff Statistic (Faculty)</caption>

  <tr><th>Count(id)</th><th>Faculty</th></tr>
  @foreach($stffacs as $stffac)
  <tr><td>{{$stffac->user_count}}</td><td>{{$stffac->faculty}}</td></tr>
  @endforeach
</table></center>


<br><center><table id="t01">
<caption>Student Statistic (Country)</caption>

  <tr><th>Count(id)</th><th>Country</th></tr>
  @foreach($stdcous as $stdcou)
  <tr><td>{{$stdcou->user_count}}</td><td>{{$stdcou->country}}</td></tr>
  @endforeach
</table></center>


<br><center><table id="t01">
<caption>Student Statistic (Category)</caption>
  <tr><th>Count(id)</th><th>Category</th></tr>
  @foreach($stdcats as $stdcat)
  <tr><td>{{$stdcat->user_count}}</td><td>{{$stdcat->category}}</td></tr>
  @endforeach
</table></center>


<br><center><table id="t01">
<caption>Student Statistic (Faculty)</caption>

  <tr><th>Faculty</th><th>Exchange</th><th>	Postgraduate</th><th>Undergraduate</th></tr>

  <tr><td>FHT</td>
  
  @if($fhts->category == 'Exchange students')
  	<td>{{$fhts->user_count}}</td>
  	<?php next($fhts) ?>
  @else
  	<td>0</td>
  @endif
  @if($fhts->category == 'Postgraduate students')
  	<td>{{$fhts->user_count}}</td>
  	<?php next($fhts) ?>
  @else
  	<td>0</td>
  @endif
  @if($fhts->category == 'Undergraduate students')
  	<td>{{$fhts->user_count}}</td>
  	<?php next($fhts) ?>
  @else
  	<td>0</td>
  @endif
 
  </tr>

  <tr><td>FIS</td>
  @foreach($fiss as $fis)
  @if($fis->category == 'Exchange students')
  	<td>{{$fis->user_count}}</td>
  @else
  	<td>0</td>
  @endif
  @if($fis->category == 'Postgraduate students')
  	<td>{{$fis->user_count}}</td>
  @else
  	<td>0</td>
  @endif
  @if($fis->category == 'Undergraduate students')
  	<td>{{$fis->user_count}}</td>
  @else
  	<td>0</td>
  @endif
 
  @endforeach</tr>

  <tr><td>FTE</td>
  @foreach($ftes as $fte)
  <td>{{$fte->user_count}}</td>
  @endforeach</tr>

  <tr><td>CoE</td>
  @foreach($coes as $coe)
  <td>{{$coe->user_count}}</td>
  @endforeach</tr>

  <tr><td>ESSAND</td>
  @foreach($essands as $essand)
  <td>{{$essand->user_count}}</td>
  @endforeach</tr>

</table></center>
<br><br>

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
@endsection
</tr>
</font>
</table>
</body>

</html>

