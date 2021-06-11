<?php
	include 'conn.php';
	$id_kp =$_GET['id_kp'];
	$connect->query("SELECT * FROM kp WHERE id_kp= "'.$id_kp."'");
?>