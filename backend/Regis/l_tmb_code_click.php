<?php
header('Content-Type:application/json');

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Acess-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization');
$data = json_decode(file_get_contents('php://input'), true);

$amps = $data['amps'];

include '../conn.php';



$sql = "select * from l_tambon WHERE LEFT(code,4) = '" . $amps . "' and l_tambon.name not LIKE '%*%'
     
      ";


$return_arr = array();

if ($result = mysqli_query($conn, $sql)) {
  while ($row = mysqli_fetch_assoc($result)) {

    array_push($return_arr, $row);
  }
}

mysqli_close($conn);

echo json_encode($return_arr);