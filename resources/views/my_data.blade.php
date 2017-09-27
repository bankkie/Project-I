@extends('layouts.app')
@section('content')


      <table>
  <tr><td>name</td><td>{{ Auth::user()->name }}</td></tr>
  <tr><td>title</td><td>{{$member->title}}</td></tr>
  <tr><td>e-mail</td><td>{{ Auth::user()->email }}</td></tr>
  <tr><td>status</td><td>{{$member->Status}}</td></tr>
  <tr><td>phone</td><td>{{$member->phone}}</td></tr>
  <tr><td>country</td></tr><td>{{ $member->country }}</td></tr>
  





@endsection