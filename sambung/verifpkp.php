<?php
	include 'conn.php';
	$status_prakp= $_POST['status_prakp'];
	$id_pkp= $_POST['id_pkp'];

	$connect->query("UPDATE prakp SET status_prakp = '"$status_prakp"' WHERE id_pkp =".$id_pkp);
	?>