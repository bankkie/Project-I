<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>All Data</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">


  
</head>
<style type="text/css">
.responstable {
  margin: 1em 0;
  width: 100%;
  overflow: hidden;
  background: #FFF;
  color: #024457;
  border-radius: 10px;
  border: 1px solid #167F92;
}
.responstable tr {
  border: 1px solid #D9E4E6;
}
.responstable tr:nth-child(odd) {
  background-color: #EAF3F3;
}
.responstable th {
  display: none;
  border: 1px solid #FFF;
  background-color: #167F92;
  color: #FFF;
  padding: 1em;
}
.responstable th:first-child {
  display: table-cell;
  text-align: center;
}
.responstable th:nth-child(2) {
  display: table-cell;
}
.responstable th:nth-child(2) span {
  display: none;
}
.responstable th:nth-child(2):after {
  content: attr(data-th);
}
@media (min-width: 480px) {
  .responstable th:nth-child(2) span {
    display: block;
  }
  .responstable th:nth-child(2):after {
    display: none;
  }
}
.responstable td {
  display: block;
  word-wrap: break-word;
  max-width: 7em;
}
.responstable td:first-child {
  display: table-cell;
  text-align: center;
  border-right: 1px solid #D9E4E6;
}
@media (min-width: 480px) {
  .responstable td {
    border: 1px solid #D9E4E6;
  }
}
.responstable th, .responstable td {
  text-align: left;
  margin: .5em 1em;
}
@media (min-width: 480px) {
  .responstable th, .responstable td {
    display: table-cell;
    padding: 1em;
  }
}

body {
  padding: 0 2em;
  font-family: Arial, sans-serif;
  color: #024457;
  background: #f2f2f2;
}

h1 {
  font-family: Verdana;
  font-weight: normal;
  color: #024457;
}
h1 span {
  color: #167F92;
}

</style>

<body>
  <h1>All Data</h1>

<table class="responstable">
  @extends('layouts.app')

  @section('content')
  <a href="/StatisticData"><button>Statistic</button></a>


   <tr>
    <th>User id</th>
    <th data-th="Driver details"><span>Title</span></th>
    <th>Name</th>
    <th>Status</th>
    <th>E-mail</th>
    <th>Phone</th>
    <th>Country</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>

  @foreach($users as $user)
<tr>
<td>{{$user->id}}</td>
<td>{{$user->title}}</td>
<td>{{$user->name}}</td>
<td>{{$user->Status}}</td>
<td>{{$user->email}}</td>
<td>{{$user->phone}}</td>
<td>{{$user->country}}</td>
<td><button>Edit</button></td>
<td><button>Delete</button></td>
</tr>
@endforeach
</table>
@endsection

</body>
</html>

