@extends('layouts.app')

@section('content')
<a href="/StatisticData"><button>Statistic</button></a>
All data
<table>
  <tr><td>user id</td><td>title</td><td>name</td><td>status</td><td>e-mail</td><td>phone</td><td>country</td><td>Edit</td><td>Delete</td></tr>
  @foreach($users as $user)
<tr><td>{{$user->id}}</td><td>{{$user->title}}</td><td>{{$user->name}}</td><td>{{$user->Status}}</td><td>{{$user->email}}</td><td>{{$user->phone}}</td><td>{{$user->country}}</td><td><button>Edit</button></td><td><button>Delete</button></td></tr>
@endforeach
</table>
@endsection
