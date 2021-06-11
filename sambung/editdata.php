<?php

	include 'conn.php';
	
  $semester = $_POST['semester'];
  $tahun_kp = $_POST['tahun_kp'];
  $jdl_kp= $_POST['jdl_kp'];
  $status_kp = $_POST['status_kp'];
  $sks = $_POST['sks'];
  $nim $_POST['nim'];
  $nik = $_POST['nik'];
  $tool = $_POST['tool'];
  $spek = $_POST['spek'];
  $dokumen = $_POST['dokumen'];
  $penguji= $_POST['penguji'];
  $ruangan = $_POST['ruangan'];
  $lembaga = $_POST['lembaga'];
  $pimpinan= $_POST['pimpinan'];
$telp_lembaga = $_POST['telp_lembaga'];
  $wkt_pel_kp= $_POST['wkt_pel_kp'];


	
	$connect->query("UPDATE kp SET semester='$semester', tahun_kp='$tahun_kp', jdl_kp='$jdl_kp', status='$status', sks='$sks', nim='$nim', nik='$nik', tool='$tool', spek='$spek', dokumen='$dokumen', penguji='$penguji', ruangan='$ruangan', lembaga='$lembaga', pimpinan='$pimpinan', telp_lembaga='".$telp_lembaga.", wkt_pel_kp='$wkt_pel_kp'" WHERE id_kp=". $id_kp);

?>