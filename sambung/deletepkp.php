<?php
	include 'conn.php';
	$id_prakp =$_POST['id_prakp'];
	$connect->query("DELETE FROM prakp WHERE id_prakp=".$id_prakp);

?>