<?php
header('Content-Type:application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Acess-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization');
$data = json_decode(file_get_contents('php://input'), true);
$uhid = $data['uhid'];
$cmu = $data['cmu'];
$assessor = $data['assessor'];
$assessor_date = $data['assessor_date'];
$cid = $data['cid'];
$hn = $data['hn'];
$name = $data['name'];
$surname = $data['surname'];
$birthday = $data['birthday'];
$age = $data['age'];
$tel = $data['tel'];
$address = $data['address'];
$moo = $data['moo'];
$chw_code = $data['chw_code'];
$amp_code = $data['amp_code'];
$tmb_code = $data['tmb_code'];

$refer_pcu = $data['refer_pcu'];
$refer_pcu_detail = $data['refer_pcu_detail'];
$refer_cmu = $data['refer_cmu'];
$refer_cmu_detail = $data['refer_cmu_detail'];
$walkin = $data['walkin'];
$dementia = $data['dementia'];
$falling = $data['falling'];
$disease = $data['disease'];
$disease_detail = $data['disease_detail'];
$drug = $data['drug'];
$drug_detail = $data['drug_detail'];








include '../conn.php';


$sql = "UPDATE regis
SET cmu = '" . $cmu . "',
assessor = '" . $assessor . "',
assessor_date = '" . $assessor_date . "',
cid = '" . $cid . "',
hn = '" . $hn . "',
name = '" . $name . "',
surname = '" . $surname . "',
birthday = '" . $birthday . "',
age = '" . $age . "',
tel = '" . $tel . "',
address = '" . $address . "',
moo = '" . $moo . "',
chw_code = '" . $chw_code . "',
amp_code = '" . $amp_code . "',
tmb_code = '" . $tmb_code . "',
birthday = '" . $birthday . "',
refer_pcu = '" . $refer_pcu . "',
refer_pcu_detail = '" . $refer_pcu_detail . "',
refer_cmu = '" . $refer_cmu . "',
refer_cmu_detail = '" . $refer_cmu_detail . "',
walkin = '" . $walkin . "',
dementia = '" . $dementia . "',
falling = '" . $falling . "',
disease = '" . $disease . "',
disease_detail = '" . $disease_detail . "',
drug = '" . $drug . "',
drug_detail = '" . $drug_detail . "',

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