<?php
	require("api.php");
 	if(!isset ($_GET["uuid"]) || !isset ($_GET["amount"]) || !isset ($_GET["type"]) || !isset ($_GET["reason"])){
		die("error");
	} else {
		add_trans($_GET["uuid"], $_GET["amount"], $_GET["type"], $_GET["reason"]);
	}

?>