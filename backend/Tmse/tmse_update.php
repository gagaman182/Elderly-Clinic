<?php
header('Content-Type:application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Acess-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization');
$data = json_decode(file_get_contents('php://input'), true);
$uhid = $data['uhid'];
$tmse1_1 = $data['tmse1_1'];
$tmse1_1_detail = $data['tmse1_1_detail'];
$tmse1_2 = $data['tmse1_2'];
$tmse1_2_detail = $data['tmse1_2_detail'];
$tmse1_3 = $data['tmse1_3'];
$tmse1_3_detail = $data['tmse1_3_detail'];
$tmse1_4 = $data['tmse1_4'];
$tmse1_4_detail = $data['tmse1_4_detail'];
$tmse1_5 = $data['tmse1_5'];
$tmse1_5_detail = $data['tmse1_5_detail'];
$tmse1_6 = $data['tmse1_6'];
$tmse1_6_detail = $data['tmse1_6_detail'];
$tmse2_1 = $data['tmse2_1'];
$tmse2_2 = $data['tmse2_2'];
$tmse2_3 = $data['tmse2_3'];
$tmse3_1 = $data['tmse3_1'];
$tmse3_2 = $data['tmse3_2'];
$tmse3_3 = $data['tmse3_3'];
$tmse3_4 = $data['tmse3_4'];
$tmse3_5 = $data['tmse3_5'];
$tmse4_1 = $data['tmse4_1'];
$tmse4_2 = $data['tmse4_2'];
$tmse4_3 = $data['tmse4_3'];
$tmse5_1 = $data['tmse5_1'];
$tmse5_1_detail = $data['tmse5_1_detail'];
$tmse5_2 = $data['tmse5_2'];
$tmse5_2_detail = $data['tmse5_2_detail'];
$tmse5_3 = $data['tmse5_3'];
$tmse5_3_detail = $data['tmse5_3_detail'];
$tmse5_4_1 = $data['tmse5_4_1'];
$tmse5_4_2 = $data['tmse5_4_2'];
$tmse5_4_3 = $data['tmse5_4_3'];
$tmse5_5 = $data['tmse5_5'];
$tmse5_5_detail = $data['tmse5_5_detail'];
$tmse5_6 = $data['tmse5_6'];
$tmse5_7 = $data['tmse5_7'];
$tmse5_7_detail = $data['tmse5_7_detail'];
$tmse6_1 = $data['tmse6_1'];
$tmse6_2 = $data['tmse6_2'];
$tmse6_3 = $data['tmse6_3'];
$hn = $data['hn'];
$cid = $data['cid'];
$assessor_date = $data['assessor_date'];
$total = $data['total'];
$result = $data['result'];







include '../conn.php';


$sql = "UPDATE tmse
SET tmse1_1 = '" . $tmse1_1 . "',
tmse1_1_detail = '" . $tmse1_1_detail . "',
tmse1_2 = '" . $tmse1_2 . "',
tmse1_2_detail = '" . $tmse1_2_detail . "',
tmse1_3 = '" . $tmse1_3 . "',
tmse1_3_detail = '" . $tmse1_3_detail . "',
tmse1_4 = '" . $tmse1_4 . "',
tmse1_4_detail = '" . $tmse1_4_detail . "',
tmse1_5 = '" . $tmse1_5 . "',
tmse1_5_detail = '" . $tmse1_5_detail . "',
tmse1_6 = '" . $tmse1_6 . "',
tmse1_6_detail = '" . $tmse1_6_detail . "',
tmse2_1 = '" . $tmse2_1 . "',
tmse2_2 = '" . $tmse2_2 . "',
tmse2_3 = '" . $tmse2_3 . "',
tmse3_1 = '" . $tmse3_1 . "',
tmse3_2 = '" . $tmse3_2 . "',
tmse3_3 = '" . $tmse3_3 . "',
tmse3_4 = '" . $tmse3_4 . "',
tmse3_5 = '" . $tmse3_5 . "',
tmse4_1 = '" . $tmse4_1 . "',
tmse4_2 = '" . $tmse4_2 . "',
tmse4_3 = '" . $tmse4_3 . "',
tmse5_1 = '" . $tmse5_1 . "',
tmse5_1_detail = '" . $tmse5_1_detail . "',
tmse5_2 = '" . $tmse5_2 . "',
tmse5_2_detail = '" . $tmse5_2_detail . "',
tmse5_3 = '" . $tmse5_3 . "',
tmse5_3_detail = '" . $tmse5_3_detail . "',
tmse5_4_1 = '" . $tmse5_4_1 . "',
tmse5_4_2 = '" . $tmse5_4_2 . "',
tmse5_4_3 = '" . $tmse5_4_3 . "',
tmse5_5 = '" . $tmse5_5 . "',
tmse5_5_detail = '" . $tmse5_5_detail . "',
tmse5_6 = '" . $tmse5_6 . "',
tmse5_7 = '" . $tmse5_7 . "',
tmse5_7_detail = '" . $tmse5_7_detail . "',
tmse6_1 = '" . $tmse6_1 . "',
tmse6_2 = '" . $tmse6_2 . "',
tmse6_3 = '" . $tmse6_3 . "',
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