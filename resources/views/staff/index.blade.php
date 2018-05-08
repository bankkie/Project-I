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
          </ul>
           
        </li>

                            
                                   
        

      
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
            <form action="searchstf" method="POST">
              <input type="text" id="search" name="search" placeholder="search something...">
              {{{ csrf_field() }}}
              <input type="submit" name="submit" value="">
            </form>
        </div>
        <div class="clear"> </div>
      </div>
  </div>
</div>
      <!---start-banner---->
      <div class="container">
<div class="row">
    <div class="col-lg-12">
        @if(Session::has('success_msg'))
        <div class="alert alert-success">{{ Session::get('success_msg') }}</div>
        @endif
    <!-- Posts list -->
    @if(!empty($users))<br>
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Staff List </h2>
                    <!--<form action="{{ URL::to('importExcel') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
      <input type="file" name="import_file" />
      <button class="btn btn-info">Import File</button>
    </form>-->

                </div>
                <div class="pull-right">
                <div class="dropdown">
                <button class="btn btn-danger" ype="button" data-toggle="dropdown">Personnel <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a href="{{URL::to('member')}}">Student</a></li>
                    <li><a href="{{URL::to('staff')}}">Staff</a></li>
                    <li><a href="{{URL::to('/StatisticData')}}">Statistic</a></li>
                </ul>&nbsp;&nbsp;
                </div>
                </div>
@if (Auth::check())
@if (Auth::user()->Status == 'Admin')
                
                              <div class="pull-right">
                    <a class="btn btn-warning" href="{{ url('/register') }}"> Add New</a>&nbsp;&nbsp;
                </div>

                <div class="pull-right">
              <div class="dropdown">
            <button class="btn btn-primary" type="button" data-toggle="dropdown">Excel
            <span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li><a href="{{URL::to('ExportStd')}}">Student</a></li>
              <li><a href="{{URL::to('ExportStf')}}">Staff</a></li>
              </ul>&nbsp;&nbsp;
          </div>
          </div>

          <div class="pull-right">
              <div class="dropdown">
            <button class="btn btn-success" type="button" data-toggle="dropdown">PDF
            <span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li><a href="{{ url('member/pdfstd')}}">Student</a></li>
              <li><a href="{{ url('member/pdfstf')}}">Staff</a></li>
              </ul>&nbsp;&nbsp;
          </div>
          </div>
          @endif
          @endif





            
        </div>
                </div>
            </div>
        </div><br><br>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <table class="table table-striped task-table">
                    <!-- Table Headings -->
                    <thead>
                    <tr align="center">
                        <th width="10%" >Title</th>
                        <th width="30%">Name</th>
                        <th width="10%">Faculty</th>
                        <th width="15%">Country</th>
                        <th width="15%">E-Mail</th>
                        @if (Auth::check())
                        @if (Auth::user()->Status == 'Admin')
                        <th width="20%">Action</th>
                        @endif
                        @endif
                          </tr>
                    </thead>
    
                    <!-- Table Body -->
                    <tbody>
                    @foreach($users as $user)
                    @if ($user->status == 'working')
                        <tr>
                            <!-- <td class="table-text">
                                <div>{{$user->id}}</div>
                            </td> -->
                            <td class="table-text">
                                <div>{{$user->title}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$user->first_name}}&nbsp;{{$user->middle_name}}&nbsp;{{$user->last_name}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$user->faculty}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$user->country}}</div>
                            </td>
                            
                            <td class="table-text">
                                <div>{{$user->email}}</div>
                            </td>
@if (Auth::check())
                       @if (Auth::user()->Status == 'Admin')
                            <td>
                                <a href="{{ url('/staff/details', $user->id) }}" class="label label-success">Details</a>
                                <a href="{{ url('/staff/edit', $user->id) }}" class="label label-warning">Edit</a>
                                <a href="{{ route('staff.delete', $user->id) }}" class="label label-danger" onclick="return confirm('Are you sure to delete?')">Delete</a>
                            </td>
                            @endif
                            @endif
                        </tr>
                        @endif
                    @endforeach
                    </tbody>                
                    </table>
                   

            </div>
            
              <center><div class="paginate wrapper">
       
            {!! $users->render() !!}
        
    </div></center>
        </div>

    @endif
    
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
