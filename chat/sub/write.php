<?php 
require_once 'db.php';
dbconnect();

$status = "sent";

//INSERT NEW MESSAGE
if (isset($_POST["message"]) && isset($_SESSION["user_id"]) && isset($_SESSION["user_name"]) && isset($_SESSION["sendto"])) {
	
	$query = mysql_query("INSERT INTO messages (usr_id, usr_name, sentto, mess, mess_status) 
	VALUES('$_SESSION[user_id]','$_SESSION[user_name]','$_SESSION[sendto]','$_POST[message]', '$status')");

	?><div class="sent"><h1><?php echo $_POST['message'],'</br>' ?></h1></div><?php

} else {

	?><div class"sentError"> <h1><?php echo "Could not send.",'</br>' ?></h1></div><?php

}
?>