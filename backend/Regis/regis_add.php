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



// $s = $datestart + ' 19:00:02';
// $date = strtotime($s);
// echo date('d/M/Y H:i:s', $date);

include '../conn.php';



if (!empty($uhid)) {


  $strvisit  = "  INSERT INTO regis(uhid,cmu,assessor_date,cid,hn,name,surname,assessor,
  birthday,age,tel,address,moo,chw_code,amp_code,tmb_code,refer_pcu,refer_pcu_detail,
  refer_cmu,refer_cmu_detail,walkin,dementia,falling,disease,disease_detail,
  drug,drug_detail,dateadd) 
      VALUES('" . $uhid . "','" . $cmu . "','" . $assessor_date . "',
      '" . $cid . "','" . $hn . "','" . $name . "','" . $surname . "','" . $assessor . "','" . $birthday . "',
      '" . $age . "','" . $tel . "','" . $address . "','" . $moo . "','" . $chw_code . "','" . $amp_code . "',
      '" . $tmb_code . "','" . $refer_pcu . "','" . $refer_pcu_detail . "','" . $refer_cmu . "','" . $refer_cmu_detail . "',
      '" . $walkin . "','" . $dementia . "','" . $falling . "','" . $disease . "',
      '" . $disease_detail . "','" . $drug . "','" . $drug_detail . "',CURRENT_TIMESTAMP)";



  if ($conn->query($strvisit) === TRUE) {


    $return_message = array();
    $row_array['message'] = "เพิ่มข้อมูลสำเร็จ";
    array_push($return_message, $row_array);
  } else {
    // echo "Error: " . $sql . "<br>" . $conn->error;
    $return_message = array();
    $row_array['message'] = "เพิ่มข้อมูลไม่สำเร็จ";
    // $row_array['message'] = $conn->error;

    array_push($return_message, $row_array);
  }
}

mysqli_close($conn);

echo json_encode($return_message);