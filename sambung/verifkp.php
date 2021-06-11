<?php
	include 'conn.php';
	$status_kp= $_POST['status_kp'];
	$id_kp= $_POST['id_kp'];

	$connect->query("UPDATE kp SET status_kp = '"$status_kp"' WHERE id_kp =".$id_kp);
	?>