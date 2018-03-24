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

<h2>Staffs List</h2>

<table>

  <tr>
    <th>First-Name</th>
    <th>Middle-Name</th>
    <th>Last-Name</th>
    <th>Status</th>
    <th>Country</th>
    <th>remarks</th>
  </tr>
@foreach($staffs as $staff)
  <tr>

    <td>{{$staff->first_name}}</td>
    <td>{{$staff->middle_name}}</td>
    <td>{{$staff->last_name}}</td>
    <td>{{$staff->Status}}</td>
    <td>{{$staff->country}}</td>
    <td>{{$staff->remarks}}</td>
  </tr>
 @endforeach
</table>

</body>
</html>


