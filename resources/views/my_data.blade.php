@extends('layouts.app')
@section('content')
@if(auth:user()->name="")
<div class="wrapper bgded overlay">
  <div id="pageintro" class="hoc clear"> 

  <article>
      <table>
  <tr><td>name</td><td>{{ Auth::user()->name }}</td></tr>
  <tr><td>title</td><td>{{ Auth::member()->title }}</td></tr>
  <tr><td>e-mail</td><td>{{ Auth::user()->email }}</td></tr>
  <tr><td>status</td><td>{{ Auth::member()->Status }}</td></tr>
  <tr><td>phone</td><td>{{ Auth::member()->phone }}</td></tr>
  <tr><td>country</td></tr><td>{{ Auth::member()->country }}</td></tr>
  


    </article>
  </div>
</div>
@endif
@endsection