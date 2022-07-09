<?php
header('Content-Type:application/json');

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Acess-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization');
$data = json_decode(file_get_contents('php://input'), true);
$uhid = $data['uhid'];
$sppb1 = $data['sppb1'];
$sppb2 = $data['sppb2'];
$sppb3 = $data['sppb3'];
$sppb4 = $data['sppb4'];



$total = $data['total'];
$result = $data['result'];
$hn = $data['hn'];
$cid = $data['cid'];
$assessor_date = $data['assessor_date'];



include '../conn.php';



if (!empty($uhid)) {


  $strvisit  = "  INSERT INTO sppb(uhid,sppb1,sppb2,sppb3,sppb4,hn,cid,assessor_date,total,result,dateadd) 
      VALUES('" . $uhid . "','" . $sppb1 . "','" . $sppb2 . "',
      '" . $sppb3 . "','" . $sppb4 . "','" . $hn . "',
      '" . $cid . "','" . $assessor_date . "','" . $total . "',
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