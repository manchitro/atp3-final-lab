<!DOCTYPE html>
<html>
<head>
	<title>Edit Page</title>
</head>
<body>
	<a href="{{route('home.stdlist')}}">Back</a> |
	<a href="/logout">logout</a>
	<br>


		<form method="post" >

			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<fieldset>
				<legend>Edit Employer</legend>
			<table border="1">
				<tr>
					<td>Name</td>
					<td><input type="text" name="name" value="{{$std['name']}}"></td>
				</tr>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" value="{{$std['username']}}"></td>
				</tr>
				<tr>
					<td>Compnay Name</td>
					<td><input type="text" name="company_name" value="{{$std['company_name']}}"></td>
				</tr>
				<tr>
					<td>Contact no</td>
					<td><input type="text" name="contact" value="{{$std['contact_no']}}"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" value="{{$std['password']}}"></td>
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