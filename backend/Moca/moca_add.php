<?php
header('Content-Type:application/json');

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Acess-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization');
$data = json_decode(file_get_contents('php://input'), true);
$uhid = $data['uhid'];
$moca1 = $data['moca1'];
$moca2 = $data['moca2'];
$moca4_1 = $data['moca4_1'];
$moca4_2 = $data['moca4_2'];
$moca4_3 = $data['moca4_3'];
$moca5_1 = $data['moca5_1'];
$moca5_2 = $data['moca5_2'];
$moca6 = $data['moca6'];
$moca7 = $data['moca7'];
$moca8 = $data['moca8'];
$moca_all = $data['moca_all'];

$hn = $data['hn'];
$cid = $data['cid'];
$assessor_date = $data['assessor_date'];






include '../conn.php';



if (!empty($uhid)) {


  $strvisit  = "  INSERT INTO moca(uhid,moca1,moca2,moca4_1,moca4_2,
  moca4_3,moca5_1,moca5_2,moca6,moca7,moca8,moca_all,hn,cid,assessor_date,dateadd) 
      VALUES('" . $uhid . "','" . $moca1 . "','" . $moca2 . "','" . $moca4_1 . "','" . $moca4_2 . "',
      '" . $moca4_3 . "','" . $moca5_1 . "','" . $moca5_2 . "','" . $moca6 . "','" . $moca7 . "','" . $moca8 . "',
      '" . $moca_all . "','" . $hn . "','" . $cid . "','" . $assessor_date . "',CURRENT_TIMESTAMP)";



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