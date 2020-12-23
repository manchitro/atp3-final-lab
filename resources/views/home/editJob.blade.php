<!DOCTYPE html>
<html>
<head>
	<title>Edit Page</title>
</head>
<body>
	<a href="{{route('home.joblist')}}">Back</a> |
	<a href="/logout">logout</a>
	<br>


		<form method="post" >

			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<fieldset>
				<legend>Edit Job</legend>
			<table border="1">
				<tr>
					<td>Job Title</td>
					<td><input type="text" name="job_title" value="{{$std['job_title']}}"></td>
				</tr>
				<tr>
					<td>Job Location</td>
					<td><input type="text" name="job_location" value="{{$std['job_location']}}"></td>
				</tr>
				<tr>
					<td>Compnay Name</td>
					<td><input type="text" name="company_name" value="{{$std['company_name']}}"></td>
				</tr>
				<tr>
					<td>Salary</td>
					<td><input type="text" name="salary" value="{{$std['salary']}}"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Update"></td>
				</tr>
			</table>
			</fieldset>
		</form>
</body>
</html>