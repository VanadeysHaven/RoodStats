<?php

	function get_mysql(){
		$mysql = new mysqli("localhost", "root", "TeamRood", "roodcore_playerdata");

		if($mysql->connect_error){
			die($mysql->connect_error);
		}

		return $mysql;
	}

	function get_all() {
		return get_mysql()->query("select * from playerdata");
	}

	function get_player($uuid){
		return get_mysql()->query("select * from playerdata where uuid='$uuid'");
	}

	function add_trans($uuid, $amount, $type, $reason){
		$reason_no_us = str_replace("_", " ", $reason);
		get_mysql()->query("insert into transactions (uuid, amount, type, reason) values ('$uuid', '$amount', '$type', '$reason_no_us')");
	}

?>