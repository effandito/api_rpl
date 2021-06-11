<?php

	include 'conn.php';
	$id_prakp= $_POST['id_prakp'];
  $semester = $_POST['semester'];
  $tahun_kp = $_POST['tahun_kp'];
  $status_prakp = $_POST['status_prakp'];
  $nim = $_POST['nim'];
  $nik = $_POST['nik'];
  $tool = $_POST['tool'];
  $spek = $_POST['spek'];
  $dokumen = $_POST['dokumen'];
  $penguji= $_POST['penguji'];
  $ruangan = $_POST['ruangan'];
  $lembaga = $_POST['lembaga'];
  $alamat = $_POST['alamat'];
  $pimpinan= $_POST['pimpinan'];
  $telp_lembaga = $_POST['telp_lembaga'];
  $fax = $_POST['fax'];
  $wkt_pel_kp= $_POST['wkt_pel_kp'];
  $status_prakp = $_POST['status_prakp'];


	
	$connect->query("UPDATE prakp SET semester='$semester', tahun_kp='$tahun_kp', nim='$nim', nik='$nik', tool='$tool', spek='$spek', dokumen='$dokumen', penguji='$penguji', ruangan='$ruangan', lembaga='$lembaga', pimpinan='$pimpinan', telp_lembaga='$telp_lembaga', wkt_pel_kp='$wkt_pel_kp'" WHERE id_prakp= $id_prakp");

?>