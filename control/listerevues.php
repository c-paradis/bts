<?php
	require('model/revue.class.php');
	$revues = Revue::lecture();
	include('views/listeRevues.php');
?>