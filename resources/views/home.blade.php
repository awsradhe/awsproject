<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
		<h1>Welcome to Laravel on AWS Cloud</h1>
		<a href="{{route('nextpages')}}">Go Next Page</a>
		<br>
		<br>
		<br>
		<a href="{{route('add-data')}}">Add data</a>

		<table border="1">
			<thead>
				<th>Sr.No</th>
				<th>Name</th>
				<th>Email</th>
				<th>Mobile</th>
			</thead>
			<tbody>
				@if(isset($data) && !empty($data))
					@foreach($data as $val)
						<tr>
							<td>{{$val['id']}}</td>
							<td>{{$val['name']}}</td>
							<td>{{$val['email']}}</td>
							<td>{{$val['mobile']}}</td>
						
						</tr>
					@endforeach
				@endif
			</tbody>
		</table>
</body>
</html>