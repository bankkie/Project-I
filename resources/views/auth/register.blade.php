<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<title>Register</title>
@extends('layouts.app')

@section('content_2')
  
  
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>

      <link rel="stylesheet" href="css/style.css">
      </head>
<br><br>
<body>
  <div class="login-wrap">
    <div class="login-html">
        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Register</label>
       <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
        <div class="login-form">
            <div class="sign-in-htm">
                <div class="group">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}

                     <div class="group">
                     <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="user" class="label">Name</label>
                         
                            <input id="name" type="name" class="input" name="name" value="{{ old('name') }}" required autofocus>

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

                               <input id="email" type="email" class="input" name="email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

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

                      <div class="group">
                            <input type="submit" class="button" value="Register">
                        </div>
                        </form>
            </div>
            </div>
            </div>
            </div>
            </div>
@endsection
</body>
</html>
