<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Log-in</title>
  
  
  <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>

      <link rel="stylesheet" href="layout/styles/login/css/style.css">

  
</head>

<body>
@extends('layouts.app')

@section('content_2')

  <br><br><br><br>
  <div class="login-card">

  
    <h1>Log-in</h1><br>
  <form method="POST" action="{{ route('login') }}">
  {{ csrf_field() }}
                    <div class="group">
                        <label for="user" class="label">Username</label>
                         <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input id="email" type="text" class="input" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                      </div>
        
        
                 <div class="group">
                    <label for="pass" class="label">Password</label>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <input id="pass" type="password" class="input" data-type="password" class="form-control" name="password" required>
                          @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                </div>
                </div>
    <input type="submit" name="login" class="login login-submit" value="login">
  </form>
    
  <div class="login-help">
     <a href="{{ route('password.request') }}">Forgot Password</a>
  </div>
</div>

<!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>

  
</body>
</html>
