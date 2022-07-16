<?php
header('Content-Type:application/json');

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Acess-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization');
$data = json_decode(file_get_contents('php://input'), true);
$uhid = $data['uhid'];
$tgds1 = $data['tgds1'];
$tgds2 = $data['tgds2'];
$tgds3 = $data['tgds3'];
$tgds4 = $data['tgds4'];
$tgds5 = $data['tgds5'];
$tgds6 = $data['tgds6'];
$tgds7 = $data['tgds7'];
$tgds8 = $data['tgds8'];
$tgds9 = $data['tgds9'];
$tgds10 = $data['tgds10'];
$tgds11 = $data['tgds11'];
$tgds12 = $data['tgds12'];
$tgds13 = $data['tgds13'];
$tgds14 = $data['tgds14'];
$tgds15 = $data['tgds15'];
$total = $data['total'];
$result = $data['result'];
$hn = $data['hn'];
$cid = $data['cid'];
$assessor_date = $data['assessor_date'];
$assessor = $data['assessor'];


include '../conn.php';



if (!empty($uhid)) {


  $strvisit  = "  INSERT INTO tgds(uhid,tgds1,tgds2,tgds3,tgds4,tgds5,tgds6,tgds7,tgds8,tgds9,tgds10,
  tgds11,tgds12,tgds13,tgds14,tgds15,hn,cid,assessor_date,assessor,total,result,dateadd) 
      VALUES('" . $uhid . "','" . $tgds1 . "','" . $tgds2 . "','" . $tgds3 . "','" . $tgds4 . "','" . $tgds5 . "','" . $tgds6 . "',
      '" . $tgds7 . "','" . $tgds8 . "','" . $tgds9 . "','" . $tgds10 . "','" . $tgds11 . "',
      '" . $tgds12 . "','" . $tgds13 . "','" . $tgds14 . "','" . $tgds15 . "','" . $hn . "',
      '" . $cid . "','" . $assessor_date . "','" . $assessor . "','" . $total . "','" . $result . "',CURRENT_TIMESTAMP)";



  if ($conn->query($strvisit) === TRUE) {


    $return_message = array();
    $row_array['message'] = "เพิ่มข้อมูลสำเร็จ";
    array_push($return_message, $row_array);
  } else {
    // echo "Error: " . $sql . "<br>" . $conn->error;
    $return_message = array();
    //$row_array['message'] = "เพิ่มข้อมูลไม่สำเร็จ";
    $row_array['message'] = $conn->error;

    array_push($return_message, $row_array);
  }
}

mysqli_close($conn);

echo json_encode($return_message);