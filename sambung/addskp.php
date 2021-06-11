<?php
  include 'conn.php';
  $id_mhs = $_POST['id_mhs'];
  $id_dosen= $_POST['id_dosen'];
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
	
	$sql=mysqli_query($connect,"INSERT INTO suratkp (id_mhs,id_dosen,nim,semester,tahun_kp,telp_lembaga,alamat,lembaga,dokumen,status_skp,pimpinan,fax) 
	VALUES ('$id_dosen','$id_mhs','$nim','$semester','$tahun_kp','$telp_lembaga','$alamat','$lembaga','$dokumen','$status_skp','$pimpinan','$fax')");
	if($sql)
    {
        $response['code'] = 1;
        $response['message'] = "Success! Data Inserted";
    }
    else
    {
        $response['code'] = 0;
        $response['message'] = "failed";
    }

    echo json_encode($response);
?>