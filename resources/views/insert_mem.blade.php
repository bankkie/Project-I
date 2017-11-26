<!DOCTYPE HTML>
<html>
<head>
<title>InsertMember</title>
  <script src="https://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>


  
  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css'>
<link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css'>

      <link rel="stylesheet" href="layout/style.css">

  
</head>
<body>

<div class="container">

<form class="well form-horizontal" method="POST" action={{url('/create')}} id="contact_form">
    {{ csrf_field() }}
<fieldset>
<legend>Insert Member</legend>

<div class="form-group">
  <label class="col-md-4 control-label">User id</label>  
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
                        <label class="col-md-4 control-label">Title</label>
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
  <label class="col-md-4 control-label">Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="name" placeholder="Name" class="form-control"  type="text">
    </div>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label">E-Mail</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">EXP Passport</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="exp_pass" class="form-control"  type="date">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">EXP Visa</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="exp_visa" class="form-control"  type="date">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Phone</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="phone" placeholder="099-9999999" class="form-control" type="text">
    </div>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label">Remarks</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
          <textarea class="form-control" name="remarks" placeholder="Remark"></textarea>
  </div>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label">Hobby</label>  
   <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
  <input name="hobby" placeholder="Hobby" class="form-control" type="text">
    </div>
  </div>
</div>

<div class="form-group">
                        <label class="col-md-4 control-label">Status</label>
                        <div class="col-md-4">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="Status" value="Student" /> Student
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="Status" value="Staff" /> Staff
                                </label>
                            </div>

                            <div class="radio">
                                <label>
                                    <input type="radio" name="Status" value="Admin" /> Admin
                                </label>
                            </div>
                        </div>
                    </div>

<div class="form-group">
  <label class="col-md-4 control-label">Country</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="country" placeholder="Country" class="form-control" type="text">
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
    </div><!-- /.container -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>

    <script  src="layoyt/js/index.js"></script>

</body>
</html>