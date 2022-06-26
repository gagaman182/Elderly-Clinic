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
$assessor = $data['assessor'];




include '../conn.php';



if (!empty($uhid)) {


  $strvisit  = "  INSERT INTO frax_score(uhid,frax1,frax2,frax3,hn,cid,assessor_date,assessor,dateadd) 
      VALUES('" . $uhid . "','" . $frax1 . "','" . $frax2 . "','" . $frax3 . "','" . $hn . "','" . $cid . "',
      '" . $assessor_date . "','" . $assessor . "',CURRENT_TIMESTAMP)";



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