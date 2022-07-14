<?php
header('Content-Type:application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Acess-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization');
$data = json_decode(file_get_contents('php://input'), true);
$uhid = $data['uhid'];
$knee_score1 = $data['knee_score1'];
$knee_score2 = $data['knee_score2'];
$knee_score3 = $data['knee_score3'];
$knee_score4 = $data['knee_score4'];
$knee_score5 = $data['knee_score5'];
$knee_score6 = $data['knee_score6'];
$knee_score7 = $data['knee_score7'];
$knee_score8 = $data['knee_score8'];
$knee_score9 = $data['knee_score9'];
$knee_score10 = $data['knee_score10'];
$knee_score11 = $data['knee_score11'];
$knee_score12 = $data['knee_score12'];
$total = $data['total'];
$result = $data['result'];
$outto = $data['outto'];
$hn = $data['hn'];
$cid = $data['cid'];
$assessor_date = $data['assessor_date'];







include '../conn.php';


$sql = "UPDATE knee_score
SET knee_score1 = '" . $knee_score1 . "',
knee_score2 = '" . $knee_score2 . "',
knee_score3 = '" . $knee_score3 . "',
knee_score4 = '" . $knee_score4 . "',
knee_score5 = '" . $knee_score5 . "',
knee_score6 = '" . $knee_score6 . "',
knee_score7 = '" . $knee_score7 . "',
knee_score8 = '" . $knee_score8 . "',
knee_score9 = '" . $knee_score9 . "',
knee_score10 = '" . $knee_score10 . "',
knee_score11 = '" . $knee_score11 . "',
knee_score12 = '" . $knee_score12 . "',

total = '" . $total . "',
result = '" . $result . "',
outto = '" . $outto . "',
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