<?php
header('Content-Type:application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Acess-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization');
$data = json_decode(file_get_contents('php://input'), true);
$uhid = $data['uhid'];
$adl1 = $data['adl1'];
$adl2 = $data['adl2'];
$adl3 = $data['adl3'];
$adl4 = $data['adl4'];
$adl5 = $data['adl5'];
$adl6 = $data['adl6'];
$adl7 = $data['adl7'];
$adl8 = $data['adl8'];
$adl9 = $data['adl9'];
$adl10 = $data['adl10'];
$total = $data['total'];
$result = $data['result'];
$hn = $data['hn'];
$cid = $data['cid'];
$assessor_date = $data['assessor_date'];







include '../conn.php';


$sql = "UPDATE adl
SET adl1 = '" . $adl1 . "',
adl2 = '" . $adl2 . "',
adl3 = '" . $adl3 . "',
adl4 = '" . $adl4 . "',
adl5 = '" . $adl5 . "',
adl6 = '" . $adl6 . "',
adl7 = '" . $adl7 . "',
adl8 = '" . $adl8 . "',
adl9 = '" . $adl9 . "',
adl10 = '" . $adl10 . "',
total = '" . $total . "',
result = '" . $result . "',
dateedit = CURRENT_TIMESTAMP
WHERE cid = '" . $cid . "' 
and hn = '" . $hn . "' 
and assessor_date = '" . $assessor_date . "'  
 and uhid = '" . $uhid . "' 

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