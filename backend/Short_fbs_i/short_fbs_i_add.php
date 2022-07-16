<?php
header('Content-Type:application/json');

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Acess-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization');
$data = json_decode(file_get_contents('php://input'), true);
$uhid = $data['uhid'];
$fbsi1 = $data['fbsi1'];
$fbsi2 = $data['fbsi2'];
$fbsi3 = $data['fbsi3'];
$fbsi4 = $data['fbsi4'];
$fbsi5 = $data['fbsi5'];
$fbsi6 = $data['fbsi6'];
$fbsi7 = $data['fbsi7'];
$total = $data['total'];

$hn = $data['hn'];
$cid = $data['cid'];
$assessor_date = $data['assessor_date'];
$assessor = $data['assessor'];




include '../conn.php';



if (!empty($uhid)) {


  $strvisit  = "  INSERT INTO short_fbs_i(uhid,fbsi1,fbsi2,fbsi3,fbsi4,fbsi5,fbsi6,fbsi7,
  total,hn,cid,assessor_date,assessor,dateadd) 
      VALUES('" . $uhid . "','" . $fbsi1 . "','" . $fbsi2 . "','" . $fbsi3 . "',
      '" . $fbsi4 . "','" . $fbsi5 . "','" . $fbsi6 . "','" . $fbsi7 . "',
      '" . $total . "','" . $hn . "','" . $cid . "','" . $assessor_date . "','" . $assessor . "',
      CURRENT_TIMESTAMP)";



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