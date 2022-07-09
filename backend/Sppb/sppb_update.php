<?php
header('Content-Type:application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Acess-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization');
$data = json_decode(file_get_contents('php://input'), true);
$uhid = $data['uhid'];
$sppb1 = $data['sppb1'];
$sppb2 = $data['sppb2'];
$sppb3 = $data['sppb3'];
$sppb4 = $data['sppb4'];



$total = $data['total'];
$result = $data['result'];
$hn = $data['hn'];
$cid = $data['cid'];
$assessor_date = $data['assessor_date'];







include '../conn.php';


$sql = "UPDATE sppb
SET sppb1 = '" . $sppb1 . "',
sppb2 = '" . $sppb2 . "',
sppb3 = '" . $sppb3 . "',
sppb4 = '" . $sppb4 . "',


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