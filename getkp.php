
<?php
include 'conn.php';

$id_kp = $_GET['id_kp'];
//$queryResult=$connect->query("SELECT FROM kp where id_kp=$id_kp");

//result=array();

//while($fetchData=$queryResult->fetch_assoc()){
	///$result[]=$fetchData;
//}

$sql = mysqli_query($connect, 'SELECT * FROM kp where id_kp='.$id_kp );
$result = array();
while($r = mysqli_fetch_array($sql, MYSQLI_ASSOC))
{
    $result[] = $r;
}
echo json_encode($result);

?>
