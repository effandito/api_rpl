<?php
	include 'conn.php';
	$id_kp =$_POST['id_kp'];
	$connect->query("DELETE FROM kp WHERE id_kp= $id_kp");

?>