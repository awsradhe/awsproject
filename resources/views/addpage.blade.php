<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
		<h1>Welcome Data</h1>
		<a href="{{route('nextpages')}}">Go Next Page</a>
		<br>
		<br>
		<br>
		<a href="/">Back Page</a>
		<br>
		<br>
		<br>
		<form method="POST" action="{{route('add-post')}}">
			@csrf
			Name:<input type="text" name="name"><br><br>
			Email:<input type="email" name="email"><br><br>
			Mobile:<input type="text" name="mobile"><br><br>
			<input type="submit" name="submit" value="submit">
		</form>
</body>
</html>