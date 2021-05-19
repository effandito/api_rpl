<?php

	include 'conn.php';
	
	$id_kp = $_POST['id_kp'];
	$smstr = $_POST['smstr'];
  $tahun = $_POST['tahun'];
  $judul_kp= $_POST['judul_kp'];
    $status = $_POST['status'];
  $sks = $_POST['sks'];
  $nim $_POST['nim'];
  $nik = $_POST['nik'];
  $tools = $_POST['tools'];
  $spek = $_POST['spek'];
  $dokumen = $_POST['dokumen'];
  $penguji= $_POST['penguji'];
  $ruang = $_POST['ruang'];
  $lembaga = $_POST['lembaga'];
  $pimpinan= $_POST['pimpinan'];
$no_telp = $_POST['no_telp'];
  $wkt_pel_kp= $_POST['wkt_pel_kp'];


	
	$connect->query("UPDATE kp SET smstr='".$smstr."', tahun='".$tahun."', judul_kp='".$judul_kp."', status='".$status.", sks='".$sks.", nim='".$nim."', nik='".$nik.", tools='".$tools.", spek='".$spek.", dokumen='".$dokumen.", penguji='".$penguji.", ruang='".$ruang.", lembaga='".$lembaga.", pimpinan='".$pimpinan.", no_telp='".$no_telp.",, wkt_pel_kp='".$wkt_pel_kp."" WHERE id_pkp=". $id_pkp);

?>