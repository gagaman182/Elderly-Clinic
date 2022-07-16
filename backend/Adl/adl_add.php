<?php
header('Content-Type:application/json');

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Acess-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization');
$data = json_decode(file_get_contents('php://input'), true);
$uhid = $data['uhid'];
$adl1 = $data['adl1'];
$adl2 = $data['adl2'];
$adl3 = $data['adl3'];
$adl4 = $data['adl4'];
$adl5 = $data['adl5'];
$adl6 = $data['adl6'];
$adl7 = $data['adl7'];
$adl8 = $data['adl8'];
$adl9 = $data['adl9'];
$adl10 = $data['adl10'];
$hn = $data['hn'];
$cid = $data['cid'];

$assessor_date = $data['assessor_date'];
$assessor = $data['assessor'];
$total = $data['total'];
$result = $data['result'];



include '../conn.php';



if (!empty($uhid)) {


  $strvisit  = "  INSERT INTO adl(uhid,adl1,adl2,adl3,adl4,adl5,adl6,adl7,
  adl8,adl9,adl10,hn,cid,assessor_date,assessor,total,result,dateadd) 
      VALUES('" . $uhid . "','" . $adl1 . "','" . $adl2 . "','" . $adl3 . "','" . $adl4 . "','" . $adl5 . "',
      '" . $adl6 . "','" . $adl7 . "','" . $adl8 . "','" . $adl9 . "','" . $adl10 . "','" . $hn . "',
      '" . $cid . "','" . $assessor_date . "','" . $assessor . "','" . $total . "','" . $result . "',CURRENT_TIMESTAMP)";



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