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
         <li><a href="{{ url('/member') }}">Database</a></li>
         
              <li><a href="{{ url('/volunteer')}}">Volunteer</a></li>
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
</head>
<body>

@extends('layouts.data.app')

@section('content')

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
                    <h2>User List </h2>
                    <!--<form action="{{ URL::to('importExcel') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
      <input type="file" name="import_file" />
      <button class="btn btn-info">Import File</button>
    </form>-->

                </div>
                <div class="pull-right">
                <a class="btn btn-success" href="/StatisticData">Statistic</a>&nbsp;&nbsp;
                </div>
@if (Auth::check())
@if (Auth::user()->Status == 'Admin')
                <div class="pull-right">

              <a class="btn btn-danger" href="{{URL::to('deleteAll')}}">Delete All</a>&nbsp;&nbsp;
              </div>
                              <div class="pull-right">
                    <a class="btn btn-warning" href="{{ url('/InsertMember')}}"> Add New</a>&nbsp;&nbsp;
                </div>
@endif
                <div class="pull-right">
              <div class="dropdown">
            <button class="btn btn-primary" type="button" data-toggle="dropdown">Export
            <span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li><a href="{{URL::to('getExport')}}">Excel</a></li>
              <li><a href="{{ url('member/pdf')}}">PDF</a></li>
              </ul>&nbsp;&nbsp;
          </div>
          </div>
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
                    <tr>
                        <th width="20%" align="center">First-Name</th>
                        <th width="15%">Middle-Name</th>
                        <th width="15%">Last-Name</th>
                        <th width="15%">Status</th>
                        <th width="15%">E-Mail</th>
                        <th width="20%">Action</th>
                          </tr>
                    </thead>
    
                    <!-- Table Body -->
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <!-- <td class="table-text">
                                <div>{{$user->id}}</div>
                            </td> -->
                            <td class="table-text">
                                <div>{{$user->first_name}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$user->middle_name}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$user->last_name}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$user->Status}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$user->email}}</div>
                            </td>

                       
                            <td>
                                <a href="{{ url('/member/details', $user->id) }}" class="label label-success">Details</a>
                                <a href="{{ route('member.edit', $user->id) }}" class="label label-warning">Edit</a>
                                <a href="{{ route('member.delete', $user->id) }}" class="label label-danger" onclick="return confirm('Are you sure to delete?')">Delete</a>
                            </td>
                        </tr>
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
@endsection

</body>

</html>

