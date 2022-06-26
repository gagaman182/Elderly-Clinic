<?php
header('Content-Type:application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Acess-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization');
include '../conn.php';
$data = json_decode(file_get_contents('php://input'), true);

$search = $data['search'];
$data_search = $data['data_search'];

if ($search == 'cid') {

  $sql = "SELECT
	concat(regis.NAME, ' ', regis.surname)AS fullname,
	regis.age,
  cmus.name,
  regis.assessor,
  regis.hn,
  regis.cid,
  regis.assessor_date
FROM
	regis
INNER JOIN cmus on regis.cmu = cmus.id where cid = '" . $data_search . "' ";
} else {
  $sql = "SELECT
	concat(regis.NAME, ' ', regis.surname)AS fullname,
	regis.age,
  cmus.name,
  regis.assessor,
  regis.hn,
  regis.cid,
  regis.assessor_date
FROM
	regis
INNER JOIN cmus on regis.cmu = cmus.id where hn = '" . $data_search . "' ";
}
$return_arr = array();

if ($result = mysqli_query($conn, $sql)) {
  while ($row = mysqli_fetch_assoc($result)) {

    array_push($return_arr, $row);
  }
}

mysqli_close($conn);

echo json_encode($return_arr);