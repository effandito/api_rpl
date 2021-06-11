<?php
  include 'conn.php';
  $tahun_ukp = $_POST['tahun_ukp'];
  $ruangan= $_POST['ruangan'];
  $penguji = $_POST['penguji'];
  $jadwal_ujian = $_POST['tahun_kp'];
  $status_ujian = $_POST['telp_lembaga'];


	
	$sql=mysqli_query($connect,"INSERT INTO ujian (tahun_ukp,ruangan,penguji,jadwal_ujian,status_ujian) 
	VALUES ('$id_dosen','$tahun_ukp','$ruangan','$penguji','$jadwal_ujian','$status_ujian')");
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