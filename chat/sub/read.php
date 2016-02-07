<?php
require_once __DIR__ . '/../../db.php';
dbconnect();

// GET LASTEST MESSAGE AND ITS STATUS
$lastMessage = mysql_query("SELECT mess_id, usr_name, sentto, mess, mess_status FROM  messagesdup ORDER BY mess_id DESC LIMIT 1");

$lastMessageFROM = $lastMessage['usr_name'];
$lastMessageID = $lastMessage['mess_id'];
$lastMessageSentto = $lastMessage['sentto'];
$lastMessageTEXT = $lastMessage['mess'];
$lastMessageSTATUS = $lastMessage['mess_status'];

// IF STATUS = SENT (AND SENTTO = MYID) DO THIS:

if ($lastMessageSTATUS == "sent" && $lastMessageSentto == $_SESSION['user_id']) { ?>
	<div class="received"> <h1>
		<?php echo $lastMessageTEXT ?>

	</h1> </div>

	<?php
	// THEN UPDATE STATUS TO READ
	mysql_query("UPDATE messages SET mess_status = 'read' ORDER BY mess_id DESC LIMIT 1");
}
?>