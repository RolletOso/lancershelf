<?php

//header("Content-Type: text/plain");
require_once 'session.php';
require_once 'db.php';

$message_id = mysql_real_escape_string($_REQUEST['2ea6201a068c5fa0eea5d81a3863321a87f8d533_c']);
$message_id = (int)$message_id;
$test_query = mysql_query("DELETE FROM pm_messages WHERE id = '".$message_id."' ");
		if($test_query){
			echo "successful"; }
	
	?>