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

<h2>Students List</h2>

<table>

  <tr>
    <th>First-Name</th>
    <th>Middle-Name</th>
    <th>Last-Name</th>
    <th>Status</th>
    <th>Country</th>
    <th>remarks</th>
  </tr>
@foreach($students as $student)
  <tr>

    <td>{{$student->first_name}}</td>
    <td>{{$student->middle_name}}</td>
    <td>{{$student->last_name}}</td>
    <td>{{$student->Status}}</td>
    <td>{{$student->country}}</td>
    <td>{{$student->remarks}}</td>
  </tr>
 @endforeach
</table>

</body>
</html>


