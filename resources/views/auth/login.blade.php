<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<title>Login</title>
@extends('layouts.app')

@section('content_2')
  
  
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>

      <link rel="stylesheet" href="css/style.css">
      </head>
<br><br>
<body>
  <div class="login-wrap">
    <div class="login-html">
        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Login</label>
       <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
        <div class="login-form">
            <div class="sign-in-htm">
                <div class="group">
                    <form class="login-form" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <div class="group">
                        <label for="user" class="label">Username</label>
                         <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input id="email" type="email" class="input" name="email" value="{{ old('email') }}" required autofocus>

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
                      
                <div class="group">
                    <input id="check" type="checkbox" class="check" checked>
                    <label for="check"><span class="icon"></span> Keep me Signed in</label>
                </div>
                <div class="group">
                    <input type="submit" class="button" value="Sign In">
                </div>
                <div class="hr"></div>
                <div class="foot-lnk">
                    <a href="{{ route('password.request') }}">Forgot Password?</a>
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

