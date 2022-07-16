<?php
header('Content-Type:application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Acess-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization');
$data = json_decode(file_get_contents('php://input'), true);
$uhid = $data['uhid'];
$fall = $data['fall'];

$hn = $data['hn'];
$cid = $data['cid'];
$assessor_date = $data['assessor_date'];
$assessor = $data['assessor'];








include '../conn.php';


$sql = "UPDATE fall
SET fall = '" . $fall . "',
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