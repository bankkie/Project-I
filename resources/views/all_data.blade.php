<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="layout/styles/style.css">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css">
</head>
<body><font color="#000000"> 

@extends('layouts.app')

@section('content')
<a href="/StatisticData"><button>Statistic</button></a>
All data
<table><font color=“รหัสสี/ชื่อสี”> 
  <tr><td>user id</td><td>title</td><td>name</td><td>status</td><td>e-mail</td><td>phone</td><td>country</td><td>Edit</td><td>Delete</td></tr>
  @foreach($users as $user)
<tr><td>{{$user->id}}</td><td>{{$user->title}}</td><td>{{$user->name}}</td><td>{{$user->Status}}</td><td>{{$user->email}}</td><td>{{$user->phone}}</td><td>{{$user->country}}</td><td><button>Edit</button></td><td><button>Delete</button></td></tr>
@endforeach
</table>
@endsection

 </font>
</body>
</html>

