<?php  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Walk With Me</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<!-- STYLE.CSS -->
	<link rel="stylesheet" type="text/css" href="style.css"/>
	<!-- JQUERY -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="script.js"></script>
</head>
<body>
<div class="logo col-md-6 col-md-offset-3"><h1>Walk With Me</h1></div> <!-- Hide logo once logged in -->
<section id="homePg" class="col-md-6 col-md-offset-3">
	
	<button id="signInBtn" class="btn">Log in</button>
	<button id="signUpBtn" class="btn">Sign up</button>
</section>
<section id="signIn" class="col-md-6 col-md-offset-3 no-display">
	<form>
		<input type="text" name="email" placeholder="*Email"><br>
		<input type="password" name="password" placeholder="*Password"><br>
		<button id="signInBtn2" class="btn">Log in</button>
	</form>
</section>
<section id="signUp" class="col-md-6 col-md-offset-3 no-display">
	<form>
		<input type="text" name="name" placeholder="*Name"><br>
		<input type="text" name="email" placeholder="*Email"><br>
		<input type="text" name="password" placeholder="*Password"><br>
		<input type="password" name="confirm-password" placeholder="*Confirm Password">
		<input type="submit" value= "Sign Up"> <br>
		<br>
	</form>
</section>
<section id="app"  class="col-md-6 col-md-offset-3 no-display">

	<div class="destinationTab">
		<select id="destination" style="width: 200px">
			<option value = "a">A</option>
			<option value = "b">B</option>
			<option value = "c">C</option>
			<option value = "d">D</option>
			<option value = "e">E</option>
			<option value = "c">C</option>
		</select>
		<select id="source" style="width: 200px">
			<option value = "a">A</option>
			<option value = "b">B</option>
			<option value = "c">C</option>
			<option value = "d">D</option>

		</select>
	</div>

	<div class="sourcetab">
		<select id="source">
			<option value = "a">A</option>
			<option value = "b">biubiubbiuB</option>
			<option value = "c">C</option>
			<option value = "d">D</option>
		</select>
	</div>

</section>
</body>
</html>
