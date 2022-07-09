<?php
header('Content-Type:application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Acess-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization');
$data = json_decode(file_get_contents('php://input'), true);

$hn = $data['hn'];
$cid = $data['cid'];
$assessor_date = $data['assessor_date'];

include '../conn.php';



$sql = "select * from risk_fall WHERE cid = '" . $cid . "' and hn = '" . $hn . "'
      and assessor_date = '" . $assessor_date . "'
     
      ";


$return_arr = array();

if ($result = mysqli_query($conn, $sql)) {
  while ($row = mysqli_fetch_assoc($result)) {

    array_push($return_arr, $row);
  }
}

mysqli_close($conn);

echo json_encode($return_arr);