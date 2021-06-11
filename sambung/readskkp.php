<?php
	include 'conn.php';
	$id_skkp =$_GET['id_skkp'];
	$connect->query("SELECT * FROM suratkp WHERE id_skkp= "'.$id_skkp."'");
?>