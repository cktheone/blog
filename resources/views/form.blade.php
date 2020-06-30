<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<title>Form Sign UP</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>

<h1>Buat Account Baru!</h1>
<h2>Sign Up Form</h2>
<form method="POST" action="{{ url('/welcome') }}">
	{{ csrf_field() }}
	<label for="firstname"> First name:</label><br>
		<input type="text" name="firstname" placeholder="Isi Nama Anda">
		<br><br>
	<label for="firstname"> Last name:</label><br>
		<input type="text" name="lastname">
	<br><br>
	<label > Gender:</label><br>
		<input type="radio" name="gender" value="0">Male <br>
		<input type="radio" name="gender" value="1">Female <br>
		<input type="radio" name="gender" value="3">Other <br><br>
	<label > Nationality:</label><br><br>
	<select>
		<option value="ind">Indonesian</option>
		<option value="usa">American</option>
		<option value="aus">Australian</option>
	</select>
	<br><br>
	<label> Language Spoken:</label><br><br>
		<input type="checkbox" name="bahasa" value="0">Bahasa Indonesia <br>
		<input type="checkbox" name="bahasa" value="1">English <br>
		<input type="checkbox" name="bahasa" value="2">Other <br>
	<br><br>
	<label>Bio:</label><br>
	<textarea rows="10"></textarea>
	<br><br>
	<input type="submit" value="Sign Up">

</form>
</body>
</html>