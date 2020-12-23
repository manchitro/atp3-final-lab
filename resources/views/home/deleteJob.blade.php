<!DOCTYPE html>
<html>
<head>
	<title>Delete Page</title>
</head>
<body>
	<a href="{{route('home.joblist')}}">Back</a> |
	<a href="/logout">logout</a>
	<br>


		<form method="post" >

			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<fieldset>
				<legend>Delete Job</legend>
				<!-- <img src="{{asset('upload/$profile_img')}}">> -->
			<table border="1">
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
				<tr>
					<td colspan="2" style="color: red">Are you sure ?</td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" name="submit" value="Confirm"></td>
				</tr>
			</table>
			</fieldset>
		</form>
</body>
</html>
