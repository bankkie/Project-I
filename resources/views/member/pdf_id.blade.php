<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="/action_page.php">
  <fieldset>
    <legend>Personal information:</legend>
    Id:<br>
    <input type="text" name="firstname" value="{{$members->user_id}}">
    <br><br>

    Title:<br>
    <input type="text" name="lastname" value="{{$members->title}}">
    <br><br>

    First name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Middle name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Last name:<br>
    <input type="text" name="lastname" value="{{$members->first_name}}">
    
    <input type="text" name="lastname" value="{{$members->middle_name}}">
    
    <input type="text" name="lastname" value="{{$members->last_name}}">
    <br><br>

    Status:<br>
    <input type="text" name="lastname" value="{{$members->Status}}">
    <br><br>

    Country:<br>
    <input type="text" name="lastname" value="{{$members->country}}">
    <br>


    <br>
    
  </fieldset>
</form>

           
        
</body>
</html>