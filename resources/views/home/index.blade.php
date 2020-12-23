<!DOCTYPE html>
<html>
<head>
	<title>Job Portal</title>
</head>
<body>
	<h1>Welcome to Job Portal, {{$username}}!</h1>
	<a href="{{route('home.create')}}">Create New Employer</a> <br />
	<a href="{{route('home.stdlist')}}">View Employer List</a> <br />
	<a href="{{route('home.stdlist')}}">Search for Employers</a> <br />
	<a href="/logout">logout</a>
	<br>

</body>
</html>