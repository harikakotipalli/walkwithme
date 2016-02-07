<?php ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Live</title>
	<!-- viewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- styles -->
	<link rel="stylesheet" href="css/chatStyle.css">

	<!-- Google jQuery & Back-up-->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
	<script src="js/readNwrite.js"></script>

</head>
<body>
	<div id="countdown"><p></p></div>
	<div class="display"></div>
	<a class="logout" href="../app.php">GO BACK</a>
	<div class="forms">
		<div class="chat">
			<form id="chat" method="post">
				<textarea class="chatField" id="textField" type="text" name="message" placeholder="Say hi to <?php echo $_SESSION["soulmate"]; ?>" required = "true"></textarea> 
				<button id="send">Send</button>
			</form>
		</div>
	</div>
</body>
</html>