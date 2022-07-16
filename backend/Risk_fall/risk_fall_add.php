<?php
header('Content-Type:application/json');

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Acess-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization');
$data = json_decode(file_get_contents('php://input'), true);
$uhid = $data['uhid'];
$riskfall1 = $data['riskfall1'];
$riskfall2 = $data['riskfall2'];
$riskfall3 = $data['riskfall3'];
$riskfall4 = $data['riskfall4'];
$riskfall5 = $data['riskfall5'];
$riskfall6 = $data['riskfall6'];
$riskfall7 = $data['riskfall7'];
$riskfall8 = $data['riskfall8'];
$riskfall9 = $data['riskfall9'];
$riskfall10 = $data['riskfall10'];
$riskfall_all = $data['riskfall_all'];


$total = $data['total'];
$result = $data['result'];
$hn = $data['hn'];
$cid = $data['cid'];
$assessor_date = $data['assessor_date'];
$assessor = $data['assessor'];


include '../conn.php';



if (!empty($uhid)) {


  $strvisit  = "  INSERT INTO risk_fall(uhid,riskfall1,riskfall2,riskfall3,riskfall4,riskfall5,riskfall6,
  riskfall7,riskfall8,riskfall9,riskfall10,riskfall_all,hn,cid,assessor_date,assessor,total,result,dateadd) 
      VALUES('" . $uhid . "','" . $riskfall1 . "','" . $riskfall2 . "','" . $riskfall3 . "','" . $riskfall4 . "',
      '" . $riskfall5 . "','" . $riskfall6 . "',
      '" . $riskfall7 . "','" . $riskfall8 . "','" . $riskfall9 . "',
      '" . $riskfall10 . "','" . $riskfall_all . "','" . $hn . "',
      '" . $cid . "','" . $assessor_date . "','" . $assessor . "','" . $total . "',
      '" . $result . "',CURRENT_TIMESTAMP)";



  if ($conn->query($strvisit) === TRUE) {


    $return_message = array();
    $row_array['message'] = "เพิ่มข้อมูลสำเร็จ";
    array_push($return_message, $row_array);
  } else {
    // echo "Error: " . $sql . "<br>" . $conn->error;
    $return_message = array();
    $row_array['message'] = "เพิ่มข้อมูลไม่สำเร็จ";
    //$row_array['message'] = $conn->error;

    array_push($return_message, $row_array);
  }
}

mysqli_close($conn);

echo json_encode($return_message);