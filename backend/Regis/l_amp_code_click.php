<?php
	 header('Content-Type:application/json');
   header('Access-Control-Allow-Origin: *');
   header('Access-Control-Allow-Methods: PUT');
   header('Access-Control-Allow-Headers: Acess-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization');
   $data = json_decode(file_get_contents('php://input'),true);
  
      $codes = $data['codes'];
    //$code = '90';

   
   
	 include '../conn.php';

   
   
      $sql = " Select * from l_disult WHERE LEFT(code,2)  = '".$codes."' ";


$return_arr = array();

if ($result = mysqli_query( $conn, $sql )){
    while ($row = mysqli_fetch_assoc($result)) {
	
     array_push($return_arr,$row);
   }
 }

mysqli_close($conn);

echo json_encode($return_arr);