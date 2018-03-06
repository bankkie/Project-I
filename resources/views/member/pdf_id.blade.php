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
    <input type="text" name="firstname" value="{{$users->user_id}}">
    <br><br>

    Title:<br>
    <input type="text" name="lastname" value="{{$users->title}}">
    <br><br>

    First name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Middle name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Last name:<br>
    <input type="text" name="lastname" value="{{$users->first_name}}">
    
    <input type="text" name="lastname" value="{{$users->middle_name}}">
    
    <input type="text" name="lastname" value="{{$users->last_name}}">
    <br><br>

    Status:<br>
    <input type="text" name="lastname" value="{{$users->Status}}">
    <br><br>

    Country:<br>
    <input type="text" name="lastname" value="{{$users->country}}">
    <br>


    <br>
    
  </fieldset>
</form>

           
        
</body>
</html>