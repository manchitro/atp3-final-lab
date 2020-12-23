<!DOCTYPE html>
<html>
<head>
	<title>Create Job</title>
</head>
<body>
	<a href="{{route('home.index')}}">Back</a> |
	<a href="/logout">logout</a>
	<br>


		<form method="post" enctype="multipart/form-data">

			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<fieldset>
				<legend>Create Job</legend>
			<table>
				<tr>
					<td>Job Title</td>
					<td><input type="text" name="job_title" value="{{old('job_title')}}"></td>
				</tr>
				<tr>
					<td>Company Name</td>
					<td><input type="text" name="company_name" value="{{old('company_name')}}"></td>
				</tr>
				<tr>
					<td>Job Location</td>
					<td><input type="text" name="job_location" value="{{old('job_location')}}"></td>
				</tr>
				<tr>
					<td>Salary</td>
					<td><input type="text" name="salary" value="{{old('salary')}}" autocomplete="off"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Submit"></td>
				</tr>
			</table>
			</fieldset>
		</form>

		@foreach($errors->all() as $err)
			{{$err}} <br>
		@endforeach
</body>
</html>