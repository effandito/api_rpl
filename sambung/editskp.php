<?php

	include 'conn.php';
  $id_skp= $_POST['id_skp'];
  $nim= $_POST['nim'];
  $semester = $_POST['semester'];
  $tahun_kp = $_POST['tahun_kp'];
  $telp_lembaga = $_POST['telp_lembaga'];
  $alamat = $_POST['alamat'];
  $lembaga = $_POST['lembaga'];
  $dokumen = $_POST['dokumen'];
  $pimpinan= $_POST['pimpinan'];
  $fax= $_POST['fax'];
  $status_skp = $_POST['status_skp'];
  $created_at = $_POST['created_at'];
  $updated_at = $_POST['updated_at'];


	
	$connect->query("UPDATE suratkp SET semester='$semester', tahun_kp='$tahun_kp', status_skp='$status_skp', nim='$nim', dokumen='$dokumen', pimpinan='$pimpinan', fax='$fax',telp_lembaga='$telp_lembaga', lembaga='$lembaga'" WHERE id_skp= $id_skp");

?>