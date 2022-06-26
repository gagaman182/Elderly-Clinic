<?php
header('Content-Type:application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Acess-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization');
$data = json_decode(file_get_contents('php://input'), true);
$uhid = $data['uhid'];
$frax1 = $data['frax1'];
$frax2 = $data['frax2'];
$frax3 = $data['frax3'];
$hn = $data['hn'];
$cid = $data['cid'];
$assessor_date = $data['assessor_date'];







include '../conn.php';


$sql = "UPDATE frax_score
SET frax1 = '" . $frax1 . "',
frax2 = '" . $frax2 . "',
frax3 = '" . $frax3 . "',
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
	$row_array['message'] =  "แก้ไขข้อมูลไม่สำเร็จ ";
	array_push($return_arr, $row_array);
}


mysqli_close($conn);

echo json_encode($return_arr);