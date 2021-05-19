<?php
	include 'conn.php';
	$id_pkp =$_POST['id_pkp'];
	$connect->query("DELETE FROM pengajuankp WHERE id_pkp=".$id_pkp);

?>