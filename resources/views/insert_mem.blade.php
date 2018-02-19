<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Insert Member</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>

<link href="layout/styles/home/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="layout/styles/home/css/owl.carousel.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="layout/styles/home/css/magnific-popup.css">
  <script src="https://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>


  
  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css'>
<link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css'>

      <link rel="stylesheet" href="layout/style.css">
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
  
</head>
<body>
<br>
<div class="container">

<form class="well form-horizontal" method="POST" action={{url('/create')}} id="contact_form">
    {{ csrf_field() }}
<fieldset>
<legend>Insert Member</legend>

<div class="form-group">
  <label class="col-md-4 control-label">User id</label> <font size="4" color="#FF0000">*</font> 
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <select name="user_id">
@foreach($users as $user)
<option value="{{$user->id}}" >{{$user->id}}</option>
@endforeach
</select>
    </div>
  </div>
</div>

<div class="form-group">
                        <label class="col-md-4 control-label">Title</label><font size="4" color="#FF0000">*</font>
                        <div class="col-md-4">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="title" value="Miss" /> Miss
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="title" value="Mr." /> Mr.
                                </label>
                            </div>

                            <div class="radio">
                                <label>
                                    <input type="radio" name="title" value="Ms." /> Ms.
                            </div>
                        </div>
                    </div><!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">First Name</label><font size="4" color="#FF0000">*</font>
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="first_name" placeholder="first_name" class="form-control"  type="text">
    </div>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label">Middle Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="middle_name" placeholder="middle_name" class="form-control"  type="text">
    </div>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label">Last Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="last_name" placeholder="last_name" class="form-control"  type="text">
    </div>
  </div>
</div>







<div class="form-group">
                        <label class="col-md-4 control-label">Status</label><font size="4" color="#FF0000">*</font>
                        <div class="col-md-4">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="status" value="Student" /> Student
                                </label>
                          
                                <label>
                                    <input type="radio" name="status" value="Staff" /> Staff
                                </label>
                            </div>

                            
                        </div>
                    </div>

<div class="form-group">
  <label class="col-md-4 control-label">Country</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <select name="country">
  <option value="">-------------------- Please Select Country --------------------</option> 
  <option value="Afghanistan">Afghanistan</option> 
  <option value="Albania">Albania</option> 
  <option value="Algeria">Algeria</option> 
  <option value="American Samoa">American Samoa</option> 
  <option value="Andorra">Andorra</option> 
  <option value="Angola">Angola</option> 
  <option value="Anguilla">Anguilla</option> 
  <option value="Antarctica">Antarctica</option> 
  <option value="Antigua and Barbuda">Antigua and Barbuda</option> 
  <option value="Argentina">Argentina</option> 
  <option value="Armenia">Armenia</option> 
  <option value="Aruba">Aruba</option> 
  <option value="Australia">Australia</option> 
  <option value="Austria">Austria</option> 
  <option value="Azerbaijan">Azerbaijan</option> 
  <option value="Bahamas">Bahamas</option> 
  <option value="Bahrain">Bahrain</option> 
  <option value="Bangladesh">Bangladesh</option> 
  <option value="Barbados">Barbados</option> 
  <option value="Belarus">Belarus</option> 
  <option value="Belgium">Belgium</option> 
  <option value="Belize">Belize</option> 
  <option value="Benin">Benin</option> 
  <option value="Bermuda">Bermuda</option> 
  <option value="Bhutan">Bhutan</option> 
  <option value="Bolivia">Bolivia</option> 
  <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option> 
  <option value="Botswana">Botswana</option> 
  <option value="Bouvet Island">Bouvet Island</option> 
  <option value="Brazil">Brazil</option> 
  <option value="British Indian Ocean Territory">British Indian Ocean Territory</option> 
  <option value="Brunei Darussalam">Brunei Darussalam</option> 
  <option value="Bulgaria">Bulgaria</option> 
  <option value="Burkina Faso">Burkina Faso</option> 
  <option value="Burundi">Burundi</option> 
  <option value="Cambodia">Cambodia</option> 
  <option value="Cameroon">Cameroon</option> 
  <option value="Canada">Canada</option> 
  <option value="Cape Verde">Cape Verde</option> 
  <option value="Cayman Islands">Cayman Islands</option> 
  <option value="Central African Republic">Central African Republic</option> 
  <option value="Chad">Chad</option> 
  <option value="Chile">Chile</option> 
  <option value="China">China</option> 
  <option value="Christmas Island">Christmas Island</option> 
  <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option> 
  <option value="Colombia">Colombia</option> 
  <option value="Comoros">Comoros</option> 
  <option value="Congo">Congo</option> 
  <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option> 
  <option value="Cook Islands">Cook Islands</option> 
  <option value="Costa Rica">Costa Rica</option> 
  <option value="Cote D'ivoire">Cote D'ivoire</option> 
  <option value="Croatia">Croatia</option> 
  <option value="Cuba">Cuba</option> 
  <option value="Cyprus">Cyprus</option> 
  <option value="Czech Republic">Czech Republic</option> 
  <option value="Denmark">Denmark</option> 
  <option value="Djibouti">Djibouti</option> 
  <option value="Dominica">Dominica</option> 
  <option value="Dominican Republic">Dominican Republic</option> 
  <option value="Ecuador">Ecuador</option> 
  <option value="Egypt">Egypt</option> 
  <option value="El Salvador">El Salvador</option> 
  <option value="Equatorial Guinea">Equatorial Guinea</option> 
  <option value="Eritrea">Eritrea</option> 
  <option value="Estonia">Estonia</option> 
  <option value="Ethiopia">Ethiopia</option> 
  <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option> 
  <option value="Faroe Islands">Faroe Islands</option> 
  <option value="Fiji">Fiji</option> 
  <option value="Finland">Finland</option> 
  <option value="France">France</option> 
  <option value="French Guiana">French Guiana</option> 
  <option value="French Polynesia">French Polynesia</option> 
  <option value="French Southern Territories">French Southern Territories</option> 
  <option value="Gabon">Gabon</option> 
  <option value="Gambia">Gambia</option> 
  <option value="Georgia">Georgia</option> 
  <option value="Germany">Germany</option> 
  <option value="Ghana">Ghana</option> 
  <option value="Gibraltar">Gibraltar</option> 
  <option value="Greece">Greece</option> 
  <option value="Greenland">Greenland</option> 
  <option value="Grenada">Grenada</option> 
  <option value="Guadeloupe">Guadeloupe</option> 
  <option value="Guam">Guam</option> 
  <option value="Guatemala">Guatemala</option> 
  <option value="Guinea">Guinea</option> 
  <option value="Guinea-bissau">Guinea-bissau</option> 
  <option value="Guyana">Guyana</option> 
  <option value="Haiti">Haiti</option> 
  <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option> 
  <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option> 
  <option value="Honduras">Honduras</option> 
  <option value="Hong Kong">Hong Kong</option> 
  <option value="Hungary">Hungary</option> 
  <option value="Iceland">Iceland</option> 
  <option value="India">India</option> 
  <option value="Indonesia">Indonesia</option> 
  <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option> 
  <option value="Iraq">Iraq</option> 
  <option value="Ireland">Ireland</option> 
  <option value="Israel">Israel</option> 
  <option value="Italy">Italy</option> 
  <option value="Jamaica">Jamaica</option> 
  <option value="Japan">Japan</option> 
  <option value="Jordan">Jordan</option> 
  <option value="Kazakhstan">Kazakhstan</option> 
  <option value="Kenya">Kenya</option> 
  <option value="Kiribati">Kiribati</option> 
  <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option> 
  <option value="Korea, Republic of">Korea, Republic of</option> 
  <option value="Korea, Republic of">Kosovo, Republic of</option> 
  <option value="Kuwait">Kuwait</option> 
  <option value="Kyrgyzstan">Kyrgyzstan</option> 
  <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option> 
  <option value="Latvia">Latvia</option> 
  <option value="Lebanon">Lebanon</option> 
  <option value="Lesotho">Lesotho</option> 
  <option value="Liberia">Liberia</option> 
  <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option> 
  <option value="Liechtenstein">Liechtenstein</option> 
  <option value="Lithuania">Lithuania</option> 
  <option value="Luxembourg">Luxembourg</option> 
  <option value="Macao">Macao</option> 
  <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option> 
  <option value="Madagascar">Madagascar</option> 
  <option value="Malawi">Malawi</option> 
  <option value="Malaysia">Malaysia</option> 
  <option value="Maldives">Maldives</option> 
  <option value="Mali">Mali</option> 
  <option value="Malta">Malta</option> 
  <option value="Marshall Islands">Marshall Islands</option> 
  <option value="Martinique">Martinique</option> 
  <option value="Mauritania">Mauritania</option> 
  <option value="Mauritius">Mauritius</option> 
  <option value="Mayotte">Mayotte</option> 
  <option value="Mexico">Mexico</option> 
  <option value="Micronesia, Federated States of">Micronesia, Federated States of</option> 
  <option value="Moldova, Republic of">Moldova, Republic of</option> 
  <option value="Monaco">Monaco</option> 
  <option value="Mongolia">Mongolia</option> 
  <option value="Montenegro">Montenegro</option>
  <option value="Montserrat">Montserrat</option> 
  <option value="Morocco">Morocco</option> 
  <option value="Mozambique">Mozambique</option> 
  <option value="Myanmar">Myanmar</option> 
  <option value="Namibia">Namibia</option> 
  <option value="Nauru">Nauru</option> 
  <option value="Nepal">Nepal</option> 
  <option value="Netherlands">Netherlands</option> 
  <option value="Netherlands Antilles">Netherlands Antilles</option> 
  <option value="New Caledonia">New Caledonia</option> 
  <option value="New Zealand">New Zealand</option> 
  <option value="Nicaragua">Nicaragua</option> 
  <option value="Niger">Niger</option> 
  <option value="Nigeria">Nigeria</option> 
  <option value="Niue">Niue</option> 
  <option value="Norfolk Island">Norfolk Island</option> 
  <option value="Northern Mariana Islands">Northern Mariana Islands</option> 
  <option value="Norway">Norway</option> 
  <option value="Oman">Oman</option> 
  <option value="Pakistan">Pakistan</option> 
  <option value="Palau">Palau</option> 
  <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option> 
  <option value="Panama">Panama</option> 
  <option value="Papua New Guinea">Papua New Guinea</option> 
  <option value="Paraguay">Paraguay</option> 
  <option value="Peru">Peru</option> 
  <option value="Philippines">Philippines</option> 
  <option value="Pitcairn">Pitcairn</option> 
  <option value="Poland">Poland</option> 
  <option value="Portugal">Portugal</option> 
  <option value="Puerto Rico">Puerto Rico</option> 
  <option value="Qatar">Qatar</option> 
  <option value="Reunion">Reunion</option> 
  <option value="Romania">Romania</option> 
  <option value="Russian Federation">Russian Federation</option> 
  <option value="Rwanda">Rwanda</option> 
  <option value="Saint Helena">Saint Helena</option> 
  <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
  <option value="Saint Lucia">Saint Lucia</option> 
  <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option> 
  <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option> 
  <option value="Samoa">Samoa</option> 
  <option value="San Marino">San Marino</option> 
  <option value="Sao Tome and Principe">Sao Tome and Principe</option> 
  <option value="Saudi Arabia">Saudi Arabia</option> 
  <option value="Senegal">Senegal</option> 
  <option value="Serbia">Serbia</option> 
  <option value="Seychelles">Seychelles</option> 
  <option value="Sierra Leone">Sierra Leone</option> 
  <option value="Singapore">Singapore</option> 
  <option value="Slovakia">Slovakia</option> 
  <option value="Slovenia">Slovenia</option> 
  <option value="Solomon Islands">Solomon Islands</option> 
  <option value="Somalia">Somalia</option> 
  <option value="South Africa">South Africa</option> 
  <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option> 
  <option value="South Sudan">South Sudan</option> 
  <option value="Spain">Spain</option> 
  <option value="Sri Lanka">Sri Lanka</option> 
  <option value="Sudan">Sudan</option> 
  <option value="Suriname">Suriname</option> 
  <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option> 
  <option value="Swaziland">Swaziland</option> 
  <option value="Sweden">Sweden</option> 
  <option value="Switzerland">Switzerland</option> 
  <option value="Syrian Arab Republic">Syrian Arab Republic</option> 
  <option value="Taiwan, Republic of China">Taiwan, Republic of China</option> 
  <option value="Tajikistan">Tajikistan</option> 
  <option value="Tanzania, United Republic of">Tanzania, United Republic of</option> 
  <option value="Thailand">Thailand</option> 
  <option value="Timor-leste">Timor-leste</option> 
  <option value="Togo">Togo</option> 
  <option value="Tokelau">Tokelau</option> 
  <option value="Tonga">Tonga</option> 
  <option value="Trinidad and Tobago">Trinidad and Tobago</option> 
  <option value="Tunisia">Tunisia</option> 
  <option value="Turkey">Turkey</option> 
  <option value="Turkmenistan">Turkmenistan</option> 
  <option value="Turks and Caicos Islands">Turks and Caicos Islands</option> 
  <option value="Tuvalu">Tuvalu</option> 
  <option value="Uganda">Uganda</option> 
  <option value="Ukraine">Ukraine</option> 
  <option value="United Arab Emirates">United Arab Emirates</option> 
  <option value="United Kingdom">United Kingdom</option> 
  <option value="United States">United States</option> 
  <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option> 
  <option value="Uruguay">Uruguay</option> 
  <option value="Uzbekistan">Uzbekistan</option> 
  <option value="Vanuatu">Vanuatu</option> 
  <option value="Venezuela">Venezuela</option> 
  <option value="Viet Nam">Viet Nam</option> 
  <option value="Virgin Islands, British">Virgin Islands, British</option> 
  <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option> 
  <option value="Wallis and Futuna">Wallis and Futuna</option> 
  <option value="Western Sahara">Western Sahara</option> 
  <option value="Yemen">Yemen</option> 
  <option value="Zambia">Zambia</option> 
  <option value="Zimbabwe">Zimbabwe</option>
</select>
    </div>
  </div>
</div>

<div class="form-group">
                        <label class="col-md-4 control-label">Buddy</label><font size="4" color="#FF0000">*</font>
                        <div class="col-md-4">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="buddy" value="Yes" /> Yes
                                </label>
                          
                          
                                <label>
                                    <input type="radio" name="buddy" value="No" /> No
                                </label>
                            </div>

                            
                        </div>
                    </div>

<div class="form-group">
  <label class="col-md-4 control-label">Facebook</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="facebook" placeholder="facebook" class="form-control"  type="text">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Line</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="line" placeholder="line" class="form-control"  type="text">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Hobby</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="hobby" placeholder="hobby" class="form-control"  type="text">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Interrests</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="interrests" placeholder="interrests" class="form-control"  type="text">
    </div>
  </div>
</div>

<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-warning" >Send <span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>

</fieldset>
</form>
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