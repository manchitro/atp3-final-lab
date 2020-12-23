<!DOCTYPE html>
<html>
<head>
	<title>Student List</title>
</head>
<body>
	<a href="/home">Back</a> |
	<a href="/logout">logout</a>
	<br>

	<table border="1">
		<tr>
			<td>Id</td>
			<td>Job Title</td>
			<td>Company Name</td>
            <td>Location</td>
			<td>Salary</td>
			<td>Actions</td>
		</tr>

		@for($i=0; $i < count($jobs); $i++)
		

			<tr>
				<td>{{$jobs[$i]['id']}}</td>
				<td>{{$jobs[$i]['job_title']}}</td>
				<td>{{$jobs[$i]['company_name']}}</td>
				<td>{{$jobs[$i]['job_location']}}</td>
				<td>{{$jobs[$i]['salary']}}</td>
				
				<td>
					<a href="{{route('home.editJob', $jobs[$i]['id'])}}">Edit </a> |
					<a href="{{route('home.showJob', $jobs[$i]['id'])}}">Details </a> |
					<a href="/deleteJob/{{$jobs[$i]['id']}}">Delete </a> 
				</td>
			</tr>

		@endfor


	</table>
</body>
</html>