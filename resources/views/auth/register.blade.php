<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">


<title>Login</title>
<style type="text/css">
.{
  margin:0;
  padding:0;
  font-family: 'Source Sans Pro', sans-serif;
}

body {
  background:#2c3e50; /*From http://flatuicolors.com/ */
}

form {
  position:relative;
  width:700px;
  height:500px;
  margin:50px auto;
  text-align:center;
  background:#ecf0f1;
  padding:40px;
  -webkit-border-radius:20px 0 0 0;
     -moz-border-radius:20px 0 0 0;
          border-radius:20px 0 0 0;
  -webkit-box-shadow: 0px 1px 0px #ad392d, inset 0px 1px 0px white;
     -moz-box-shadow: 0px 1px 0px #ad392d, inset 0px 1px 0px white;
          box-shadow: 0px 1px 0px #ad392d, inset 0px 1px 0px white;
  box-shadow: 20px 20px 20px;
}

h4 {
  font-family: 'Source Sans Pro', sans-serif;
  font-size:2em;
  font-weight:300;
  margin-bottom:25px;
  color:#7f8c8d;
  text-shadow:1px 1px 0px white;
}

input {
  display:block;
  width:500px;
  padding:14px;
  -webkit-border-radius:6px;
     -moz-border-radius:6px;
          border-radius:6px;
  border:0;
  margin-bottom:12px;
  color:#031a1c;
  font-weight:600;
  font-size:16px;
}

input:focus {
  background:#fafafa;
}


li {
  position:absolute;
  right:40px;
  bottom:62px;
  list-style:none;
}

a, a:visited {
  text-decoration:none;
  color:#7f8c8d;
  font-weight:400;
  text-shadow:1px 1px 0px white;
  -webkit-transition: all .3s ease-in-out;
     -moz-transition: all .3s ease-in-out;
          transition: all .3s ease-in-out;
}

.button {
  position:relative;
  float:left;
  width:145px;
  margin-top:10px;
  background:#3498db;
  color:#fff;
  font-weight:400;
  text-shadow:1px 1px 0px #2d7baf;
  box-shadow:0px 3px 0px #2d7baf;
  -webkit-transition: all .3s ease-in-out;
     -moz-transition: all .3s ease-in-out;
          transition: all .3s ease-in-out;
}
</style>

</head>

<body>
@extends('layouts.app')

@section('content')
<center><br><br><br><br><form>

                <br><h4>Register</h4>
                
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            
                                <center><input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus></center>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <center>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required></center>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <center>
                                <input id="password" type="password" class="form-control" name="password" required></center>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <center>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required></center>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
