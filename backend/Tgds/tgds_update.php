<?php
header('Content-Type:application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Acess-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization');
$data = json_decode(file_get_contents('php://input'), true);
$uhid = $data['uhid'];
$tgds1 = $data['tgds1'];
$tgds2 = $data['tgds2'];
$tgds3 = $data['tgds3'];
$tgds4 = $data['tgds4'];
$tgds5 = $data['tgds5'];
$tgds6 = $data['tgds6'];
$tgds7 = $data['tgds7'];
$tgds8 = $data['tgds8'];
$tgds9 = $data['tgds9'];
$tgds10 = $data['tgds10'];
$tgds11 = $data['tgds11'];
$tgds12 = $data['tgds12'];
$tgds13 = $data['tgds13'];
$tgds14 = $data['tgds14'];
$tgds15 = $data['tgds15'];
$total = $data['total'];
$result = $data['result'];
$hn = $data['hn'];
$cid = $data['cid'];
$assessor_date = $data['assessor_date'];
$assessor = $data['assessor'];







include '../conn.php';


$sql = "UPDATE tgds
SET tgds1 = '" . $tgds1 . "',
tgds2 = '" . $tgds2 . "',
tgds3 = '" . $tgds3 . "',
tgds4 = '" . $tgds4 . "',
tgds5 = '" . $tgds5 . "',
tgds6 = '" . $tgds6 . "',
tgds7 = '" . $tgds7 . "',
tgds8 = '" . $tgds8 . "',
tgds9 = '" . $tgds9 . "',
tgds10 = '" . $tgds10 . "',
tgds11 = '" . $tgds11 . "',
tgds12 = '" . $tgds12 . "',
tgds13 = '" . $tgds13 . "',
tgds14 = '" . $tgds14 . "',
tgds15 = '" . $tgds15 . "',
total = '" . $total . "',
result = '" . $result . "',
assessor = '" . $assessor . "',
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