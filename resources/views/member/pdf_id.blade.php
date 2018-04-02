<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<form action="/action_page.php">

  <fieldset>
    <legend>Personal information:</legend>
    <!-- Id:<br>
    <input type="text" name="firstname" value="{{$users->std_id}}">
    <br><br>
    Title:<br>
    <input type="text" name="lastname" value="{{$users->title}}">
    <br><br>
    First name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Middle name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Last name:<br>
    <input type="text" name="lastname" value="{{$users->first_name}}">
    
    <input type="text" name="lastname" value="{{$users->middle_name}}">
    
    <input type="text" name="lastname" value="{{$users->last_name}}">
    <br><br>
    Country:<br>
    <input type="text" name="lastname" value="{{$users->country}}">
    <br> -->
    <br>
     <table>
     
  <tr><td>Name</td><td>{{ $users->title }}&nbsp;{{$users->first_name}}&nbsp;{{$users->middle_name}}&nbsp;{{$users->last_name}}</td></tr>
  <tr><td>E-mail</td><td>{{ $users->email }}</td></tr>

  <tr><td>Country</td><td>{{ $users->country }}</td></tr>
  <tr><td>EXP PASSPOT</td><td>{{ $users->exp_passport }}</td></tr>
  <tr><td>EXP VISA</td><td>{{ $users->exp_visa }}</td></tr>
  <tr><td>Status</td><td>{{ $users->status }}</td></tr>
  <tr><td>Remarks</td><td>{{ $users->remarks }}</td></tr>
  <tr><td>Phone</td><td>{{ $users->phone }}</td></tr>
  <tr><td>Student ID</td><td>{{ $users->std_id }}</td></tr>
  <tr><td>Birthday</td><td>{{ $users->birthday }}</td></tr>
  <tr><td>Study Date</td><td>{{ $users->study_date }}</td></tr>
  <tr><td>Category</td><td>{{ $users->category }}</td></tr>
  <tr><td>Faculty</td><td>{{ $users->faculty }}</td></tr>
  <tr><td>Section</td><td>{{ $users->section }}</td></tr>
  <tr><td>Activity hour</td><td>{{ $users->activity_hour }}</td></tr>
  <tr><td>Buddy</td><td>{{ $users->buddy }}</td></tr>
  <tr><td>Facebook</td><td>{{ $users->facebook }}</td></tr>
  <tr><td>Line</td><td>{{ $users->line }}</td></tr>
  <tr><td>Hobby</td><td>{{ $users->hobby }}</td></tr>
  <tr><td>Interests</td><td>{{ $users->interests }}</td></tr>

    <br>
    
  </fieldset>

</form>

           
        
</body>
</html>