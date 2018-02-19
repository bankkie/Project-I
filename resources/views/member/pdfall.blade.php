<!DOCTYPE html>
<html>
<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Members List</h2>

<table>

  <tr>
    <th>Title</th>
    <th>First-Name</th>
    <th>Middle-Name</th>
    <th>Last-Name</th>
    <th>Status</th>
    <th>Country</th>
  </tr>
@foreach($members as $member)
  <tr>
    <td>{{$member->title}}</td>
    <td>{{$member->first_name}}</td>
    <td>{{$member->middle_name}}</td>
    <td>{{$member->last_name}}</td>
    <td>{{$member->Status}}</td>
    <td>{{$member->country}}</td>
  </tr>
 @endforeach
</table>

</body>
</html>


