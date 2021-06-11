<?php
	include 'conn.php';
	$id_skp =$_POST['id_skp'];
	$connect->query("DELETE FROM suratkp WHERE id_skp= $id_skp");
?>