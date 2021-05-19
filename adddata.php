<?php

	include 'conn.php';
	
  $id_mhs = $_POST['id_mhs'];
  $id_dosen= $_POST['id_dosen'];
	$smstr = $_POST['smstr'];
  $tahun = $_POST['tahun'];
  $judul_kp= $_POST['judul_kp'];
    $status = $_POST['status'];
  $nim = $_POST['nim'];
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
	
	
	
	$sql=mysqli_query($connect,'INSERT INTO  kp (id_mhs,id_dosen,semester,tahun_kp,jdl_kp,status_kp,nim,nik,tool,spek,dokumen,penguji,ruangan,lembaga,pimpinan,telp_lembaga,wkt_pel_kp) VALUES ('.$id_dosen.','.$id_mhs.','.$smstr.','.$tahun.','.$judul_kp.','.$status.','.$nim.','.$nik.','.$tools.','.$spek.','.$dokumen.','.$penguji.','.$ruang.','.$lembaga.','.$pimpinan.','.$no_telp.','.$wkt_pel_kp.')');
	if($sql)
    {
        $response['code'] = 1;
        $response['message'] = "Success! Data Inserted";
    }
    else
    {
        $response['code'] = 0;
        $response['message'] = "Failed! Data not Inserted";
    }

    echo json_encode($response);

?>