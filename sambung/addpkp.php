<?php
  include 'conn.php';
  $id_mhs = $_POST['id_mhs'];
  $id_dosen= $_POST['id_dosen'];
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
	
	
	
	$sql=mysqli_query($connect,"INSERT INTO  prakp (id_prakp,id_mhs,id_dosen,semester,tahun_kp,status_prakp,nim,nik,tool,spek,alamat,dokumen,penguji,ruangan,lembaga,pimpinan,telp_lembaga,wkt_pel_kp,status_prakp,fax) 
	VALUES ('$id_dosen','$id_mhs','$semester','$tahun_kp','$status_prakp','$nim.','$nik','$tool','$spek','$dokumen','$penguji','$ruangan','$lembaga','$pimpinan','$fax','$telp_lembaga','$alamat','$wkt_pel_kp')");
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