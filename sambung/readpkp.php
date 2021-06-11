<?php
	include 'conn.php';
	$id_pkp =$_GET['id_pkp'];
	$connect->query("SELECT * FROM prakp WHERE id_pkp= "'.$id_pkp."'");
?>