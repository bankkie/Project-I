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
    <input type="text" name="std_id" value="{{$volunteer->std_id}}">
    <br><br>

    Name:<br>
    <input type="text" name="name" value="{{$volunteer->name}}">
    <br><br>

    NickName:<br>
    <input type="text" name="nickname" value="{{$volunteer->nickname}}"><br><br>
       email:<br>
    <input type="text" name="email" value="{{$volunteer->email}}"><br><br>

    Facebook:<br>
    <input type="text" name="nickname" value="{{$volunteer->facebook}}"><br><br>

    Phone:<br>
    <input type="text" name="nickname" value="{{$volunteer->phone}}"><br><br>

    reason:<br>
    <input type="text" name="nickname" value="{{$volunteer->reason}}"><br><br>

    remark:<br>
    <input type="text" name="nickname" value="{{$volunteer->remarks}}"><br><br>
    
   



    <br>
    
  </fieldset>
</form>

           
        
</body>
</html>