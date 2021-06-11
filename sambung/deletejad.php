<?php
	include 'conn.php';
	$id_ujian =$_POST['id_ujian'];
	$connect->query("DELETE FROM ujian WHERE id_ujian= $id_ujian");
?>