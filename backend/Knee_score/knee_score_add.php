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
$assessor = $data['assessor'];


include '../conn.php';



if (!empty($uhid)) {


  $strvisit  = "  INSERT INTO knee_score(uhid,knee_score1,knee_score2,knee_score3,knee_score4,knee_score5,knee_score6,knee_score7,knee_score8,knee_score9,knee_score10,
  knee_score11,knee_score12,hn,cid,assessor_date,assessor,total,result,outto,dateadd) 
      VALUES('" . $uhid . "','" . $knee_score1 . "','" . $knee_score2 . "','" . $knee_score3 . "','" . $knee_score4 . "','" . $knee_score5 . "','" . $knee_score6 . "',
      '" . $knee_score7 . "','" . $knee_score8 . "','" . $knee_score9 . "','" . $knee_score10 . "','" . $knee_score11 . "',
      '" . $knee_score12 . "','" . $hn . "',
      '" . $cid . "','" . $assessor_date . "','" . $assessor . "','" . $total . "','" . $result . "','" . $outto . "',CURRENT_TIMESTAMP)";



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