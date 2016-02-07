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

<section id="app" class="col-md-6 col-md-offset-3">
    <form id="createform" action="#" method="post">

		<!-- LOCATION -->
		<select id="location" name="location">
			<option value = "a" selected>*Location</option>
			<option value = "Bass Hall">Bass Hall</option>
			<option value = "Burton Hall">Burton Hall</option>
			<option value = "Emerson Hall">Emerson Hall</option>
			<option value = "Ford Hall">Ford Hall</option>
			<option value = "King House">King House</option>
			<option value = "McConnell Hall">McConnell Hall</option>
			<option value = "Sabin-Reed Hall">Sabin-Reed Hall</option>
			<option value = "Scales House">Scales House</option>
			<option value = "Wilder House">Wilder House</option>
			<option value = "Wilson House">Wilson House</option>
		</select>
		<!-- DESTINATION -->
		<select id="destination" name="destination">
			<option value = "a" selected>*Destination</option>
			<option value = "Bass Hall">Bass Hall</option>
			<option value = "Burton Hall">Burton Hall</option>
			<option value = "Emerson Hall">Emerson Hall</option>
			<option value = "Ford Hall">Ford Hall</option>
			<option value = "King House">King House</option>
			<option value = "McConnell Hall">McConnell Hall</option>
			<option value = "Sabin-Reed Hall">Sabin-Reed Hall</option>
			<option value = "Scales House">Scales House</option>
			<option value = "Wilder House">Wilder House</option>
			<option value = "Wilson House">Wilson House</option>
		</select>
		<!-- TIME -->
		<select id="hour" name="hour" required>
			<option value="" selected>*Time (PM)</option>
			<option value="5:00">5:00</option>
			<option value="5:15">5:15</option>
			<option value="5:30">5:30</option>
			<option value="5:45">5:45</option>
			<option value="6:00">6:00</option>
			<option value="6:15">6:15</option>
			<option value="6:30">6:30</option>
			<option value="6:45">6:45</option>
			<option value="7:00">7:00</option>
			<option value="7:15">7:15</option>
			<option value="7:30">7:30</option>
			<option value="7:45">7:45</option>
			<option value="7:45">8:00</option>
			<option value="8:15">8:15</option>
			<option value="8:30">8:30</option>
			<option value="8:45">8:45</option>
			<option value="9:00">9:00</option>
			<option value="9:15">9:15</option>
			<option value="9:30">9:30</option>
			<option value="9:45">9:45</option>
			<option value="10:00">10:00</option>
			<option value="10:15">10:15</option>
			<option value="10:30">10:30</option>
			<option value="10:45">10:45</option>
			<option value="11:00">11:00</option>
			<option value="10:15">11:15</option>
			<option value="10:30">11:30</option>
			<option value="10:45">11:45</option>
		</select>

		<button id="sdSubmit" class="btn">Create</button>
	</form>
	<div class="walks">
		<h1>MY WALKS</h1>
		<h1>EXISTING WALKS</h1>
		
		<div class='walk' style=''>
			<p> King House--> Scales House</p>
			<p>5:00 PM</p>
	<script type="text/javascript" src="js/myFunc.js"></script>
			<a href='chat/chat.php'>JOIN</a>
		</div>
		<div class='walk' style=''>
			<p> Ford Hall --> Wilder House</p>
			<p> 9:00 PM</p>
			<a href='chat/chat.php'>JOIN</a>
		</div>
	</div>
</section>
</body>
</html>