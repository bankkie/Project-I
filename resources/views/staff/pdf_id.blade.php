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
    <input type="text" name="firstname" value="{{$users->id}}">
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
  <tr><td>EXP WP</td><td>{{ $users->exp_wp }}</td></tr>
  <tr><td>SS Card</td><td>{{ $users->ss_card }}</td></tr>
  <tr><td>Tax No</td><td>{{ $users->tax_no }}</td></tr>
  <tr><td>Status</td><td>{{ $users->status }}</td></tr>
  <tr><td>Remarks</td><td>{{ $users->remarks }}</td></tr>
  <tr><td>Phone</td><td>{{ $users->phone }}</td></tr>
  <tr><td>Student ID</td><td>{{ $users->ext }}</td></tr>
  <tr><td>Birthday</td><td>{{ $users->birthday }}</td></tr>
  <tr><td>Study Date</td><td>{{ $users->begin_date }}</td></tr>
  <tr><td>Faculty</td><td>{{ $users->faculty }}</td></tr>
  <tr><td>Buddy</td><td>{{ $users->buddy }}</td></tr>
  <tr><td>Facebook</td><td>{{ $users->facebook }}</td></tr>
  <tr><td>Line</td><td>{{ $users->line }}</td></tr>
  <tr><td>Hobby</td><td>{{ $users->hobby }}</td></tr>
  <tr><td>Interests</td><td>{{ $users->interests }}</td></tr>
  </table>

    <br>
    
  </fieldset>

</form>

           
        
</body>
</html>