<?php
header('Content-Type:application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Acess-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization');
$data = json_decode(file_get_contents('php://input'), true);
$uhid = $data['uhid'];
$fbsi1 = $data['fbsi1'];
$fbsi2 = $data['fbsi2'];
$fbsi3 = $data['fbsi3'];
$fbsi4 = $data['fbsi4'];
$fbsi5 = $data['fbsi5'];
$fbsi6 = $data['fbsi6'];
$fbsi7 = $data['fbsi7'];
$total = $data['total'];

$hn = $data['hn'];
$cid = $data['cid'];
$assessor_date = $data['assessor_date'];








include '../conn.php';


$sql = "UPDATE short_fbs_i
SET fbsi1 = '" . $fbsi1 . "',
fbsi2 = '" . $fbsi2 . "',
fbsi3 = '" . $fbsi3 . "',
fbsi4 = '" . $fbsi4 . "',
fbsi5 = '" . $fbsi5 . "',
fbsi6 = '" . $fbsi6 . "',
fbsi7 = '" . $fbsi7 . "',
total = '" . $total . "',


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