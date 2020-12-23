<!DOCTYPE html>
<html>
<head>
	<title>Details Page</title>
</head>
<body>
	<a href="{{route('home.joblist')}}">Back</a> |
	<a href="/logout">logout</a>
	<br>
	<table border="1">
		<tr>
			<td>ID</td>
			<td>{{$id}}</td>
		</tr>
		<tr>
			<td>Job Title</td>
			<td>{{$job_title}}</td>
		</tr>
		<tr>
			<td>Company Name</td>
			<td>{{$company_name}}</td>
		</tr>
		<tr>
			<td>Job Location</td>
			<td>{{$job_location}}</td>
		</tr>
		<tr>
			<td>Salary</td>
			<td>{{$salary}}</td>
		</tr>
	</table>
		
</body>
</html>