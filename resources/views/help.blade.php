<!DOCTYPE html>
<html>
<head>
  <title>Help</title>
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
    width: 80%;
}
th {
    text-align: left;
    padding: 10px;
    font-size: 18px;
}

td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}


th {
    background-color: #4DB6AC;
    color: black;
}

footer {
  border-collapse: collapse;
    width: 80%;
    text-align: center;
    padding: 12px;
    font-size: 20px;
    background-color: #009688;
    color: white;
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


<br><br>


          
         <center><table>
  
<footer>สำนักงานอธิการบดีวิทยาเขตภูเก็ต<br><a class="btn btn-warning" href="{{ url('/categories') }}">เพิ่มหน่วยงาน</a>&nbsp;
<a href="{{ url('/help/insert') }}" class="btn btn-warning">เพิ่มรายชื่อ</a></footer>

@foreach ($categorys as $category) 


  <tr1>
    <th colspan="6">{{$category->name}}</th>
  </tr>
@foreach ($posts as $post)
  
@if ($category->id==$post->category_id)
  <tr>
    <td>{{$post->position}}</td>
    <td>{{$post->name}}</td>
    <td>{{$post->phone}}</td>
    <td>{{$post->email}}</td>

<td><form>
<input style="width: 90px; padding: 5px; box-shaddow: 3px 3px 3px; #999999; -webkit-box-shadow: 3px 3px 3px #999999; -moz-box-shadow: 6px 6px 5px #999999; font-weight: bold; background: #ff951e; color: #000000; cursor: pointer; border-radius: 10px; border: 1px solid #D9D9D9; font-size: 80%;" 

type="button" value="Send Email"
onclick="window.location.href='{{$post->email}}'" />
</form></td>

<td>
    <a href="{{ url('/help/show', $post->id) }}" class="label label-warning">view</a>
    <a href="{{ route('categories.edit', $post->id) }}" class="label label-danger" onclick="return confirm('Are you sure to delete?')">Edit</a>
</td>

</tr>

@endif 


@endforeach 
@endforeach 
 



</table>

</center>
   
   
     
        
        
            
    </div>
   
  
    
    <div class="clear"> </div>
  </div>  
  
<!----//End-content---->
  </div>
</div>  
</div>  
        

              
            





      <br><br><div class="footer">
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