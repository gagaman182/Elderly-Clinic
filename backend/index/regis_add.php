<?php
header('Content-Type:application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Acess-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization');
$data = json_decode(file_get_contents('php://input'), true);
$uhid = $data['uhid'];
$cmu = $data['cmu'];



// $s = $datestart + ' 19:00:02';
// $date = strtotime($s);
// echo date('d/M/Y H:i:s', $date);

include '../conn.php';



if (!empty($uhid)) {


  $strvisit  = "  INSERT INTO regis(uhid,cmu,dateadd) 
      VALUES('" . $uhid . "','" . $cmu . "',CURRENT_TIMESTAMP)";



  if ($conn->query($strvisit) === TRUE) {


    $return_message = array();
    $row_array['message'] = "เพิ่มข้อมูลสำเร็จ";
    array_push($return_message, $row_array);
  } else {
    // echo "Error: " . $sql . "<br>" . $conn->error;
    $return_message = array();
    $row_array['message'] = "เพิ่มข้อมูลไม่สำเร็จ";
    array_push($return_message, $row_array);
  }
}

mysqli_close($conn);

echo json_encode($return_message);