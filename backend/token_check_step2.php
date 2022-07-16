<?php
header('Content-Type:application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Acess-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization');
$data = json_decode(file_get_contents('php://input'), true);
$token_check_step2 = $data['token_check_step2'];

//$token_check_step2  = 'bj5nv7fo9p8esqtb75m8v69uae';
include 'conn.php';



$sql = "select *  from users_token where  token   like '" . $token_check_step2 . "'
and state_delete = '' ";


$return_arr = array();

if ($result = mysqli_query($conn, $sql)) {
	while ($row = mysqli_fetch_assoc($result)) {

		array_push($return_arr, $row);
	}
}

mysqli_close($conn);

echo json_encode($return_arr);