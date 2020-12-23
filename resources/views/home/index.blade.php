<!DOCTYPE html>
<html>
<head>
	<title>Job Portal</title>
</head>
<body>
	<h1>Welcome to Job Portal, {{$username}}!</h1>
	<a href="/logout">logout</a>

	<h2>Admin Panel</h2>
	<a href="{{route('home.create')}}">Create New Employer</a> <br />
	<a href="{{route('home.stdlist')}}">View Employer List</a> <br />
	<a href="{{route('home.search')}}">Search for Employers</a> <br />

	<h2>Employer Panel</h2>
	<a href="{{route('home.createJob')}}">Create Job</a> <br />
	<a href="{{route('home.joblist')}}">View Job list</a> <br />
	<br>
	

</body>
</html>