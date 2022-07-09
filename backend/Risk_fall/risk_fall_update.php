<?php
header('Content-Type:application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Acess-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization');
$data = json_decode(file_get_contents('php://input'), true);
$uhid = $data['uhid'];
$riskfall1 = $data['riskfall1'];
$riskfall2 = $data['riskfall2'];
$riskfall3 = $data['riskfall3'];
$riskfall4 = $data['riskfall4'];
$riskfall5 = $data['riskfall5'];
$riskfall6 = $data['riskfall6'];
$riskfall7 = $data['riskfall7'];
$riskfall8 = $data['riskfall8'];
$riskfall9 = $data['riskfall9'];
$riskfall10 = $data['riskfall10'];
$riskfall_all = $data['riskfall_all'];


$total = $data['total'];
$result = $data['result'];
$hn = $data['hn'];
$cid = $data['cid'];
$assessor_date = $data['assessor_date'];







include '../conn.php';


$sql = "UPDATE risk_fall
SET riskfall1 = '" . $riskfall1 . "',
riskfall2 = '" . $riskfall2 . "',
riskfall3 = '" . $riskfall3 . "',
riskfall4 = '" . $riskfall4 . "',
riskfall5 = '" . $riskfall5 . "',
riskfall6 = '" . $riskfall6 . "',
riskfall7 = '" . $riskfall7 . "',
riskfall8 = '" . $riskfall8 . "',
riskfall9 = '" . $riskfall9 . "',
riskfall10 = '" . $riskfall10 . "',
riskfall_all = '" . $riskfall_all . "',

total = '" . $total . "',
result = '" . $result . "',
dateedit = CURRENT_TIMESTAMP
WHERE  uhid = '" . $uhid . "' 

";





$return_arr = array();

if ($conn->query($sql) === TRUE) {


	$row_array['message'] = "แก้ไขข้อมูลสำเร็จ";
	array_push($return_arr, $row_array);
} else {
	// $row_array['message'] =  "แก้ไขข้อมูลไม่สำเร็จ ";
	$row_array['message'] = $conn->error;
	array_push($return_arr, $row_array);
}


mysqli_close($conn);

echo json_encode($return_arr);