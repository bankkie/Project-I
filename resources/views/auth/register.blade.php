<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Register</title>
  
  
  <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>

      <link rel="stylesheet" href="layout/styles/login/css/style.css">

  
</head>

<body>
@extends('layouts.app')

@section('content_2')
  
  <div class="login-card">

  
    <h1>Register</h1><br>
                    <form  method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}

                     <div class="group">
                     <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="user" class="label">Name</label>
                         
                            <input id="name" type="text" class="input" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                      </div>

                      <div class="group">

                          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email"  class="label">E-Mail Address</label>

                               <input id="email" type="text" class="input" name="email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="group">

                          <div class="form-group{{ $errors->has('Status') ? ' has-error' : '' }}">
                            <label for="Status"  class="label">Status</label>

                              <div class="radio">
 
                                <label>
                                    <input type="radio" name="Status" value="Student" /> Student
                                </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                <label>
                                    <input type="radio" name="Status" value="Staff" /> Staff
                                </label></div>
                                <div class="radio">
                                 <label>
                                    <input type="radio" name="Status" value="Volunteer" /> Volunteer
                                </label>&nbsp;&nbsp;

                                <label>
                                    <input type="radio" name="Status" value="Admin" /> Admin
                                </label>

                                </div>

                                @if ($errors->has('Status'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Status') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

<br>
                        <div class="group">

                     <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="label">Password</label>

                            <div class="col-md-6">
                                <center><input id="password" type="password" class="input" name="password" required></center>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                       <div class="group">
                        
                            <label for="password-confirm" class="label">Confirm Password</label>

                            <div class="col-md-6">
                               <center> <input id="password-confirm" type="password" class="input" name="password_confirmation" required></center>
                            </div>
                        </div>

                      
                      
                            <input type="submit" class="login login-submit" value="Register">
                        
                        </form>
            </div>
            </div>
            </div>
            </div>
            </div>
@endsection
</body>
</html>
