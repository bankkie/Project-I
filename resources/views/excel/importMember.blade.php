<!DOCTYPE html>
<html>
<head>
	<title>Memmer Info</title>
</head>
<body>
<form action="postImport" method="post" encrtype="multipart/form-data">
<input type="hidden" name="_token" value="{{csrf_token()}}">
<input type="file" name="member">
<input type="submit" value="Import"></input>

</body>
</html>