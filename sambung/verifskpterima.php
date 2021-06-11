<?php
	include 'conn.php';
	$status_skp= $_POST['status_skp'];
	$id_skp= $_POST['id_skp'];

	$connect->query("UPDATE suratkp SET status_skp = 'TERIMA' WHERE id_skp =".$id_skp);
?>