<?php
header('Content-Type:application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Acess-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization');
$data = json_decode(file_get_contents('php://input'), true);


include '../conn.php';



$sql = "SELECT
	cmus. NAME as cmu,
	regis.hn,
	regis.cid,
	CONCAT(
		regis. NAME,
		' ',
		regis.surname
	)AS fullname,
	regis.age,
knee_score.total,
knee_score.result,
knee_score.outto


       
FROM
	regis
INNER JOIN knee_score ON regis.cid = knee_score.cid

AND regis.hn = knee_score.hn
AND regis.assessor_date = knee_score.assessor_date
LEFT JOIN cmus ON regis.cmu = cmus.id
WHERE
	knee_score.outto IS NOT NULL
     
      ";


$return_arr = array();

if ($result = mysqli_query($conn, $sql)) {
	while ($row = mysqli_fetch_assoc($result)) {

		array_push($return_arr, $row);
	}
}

mysqli_close($conn);

echo json_encode($return_arr);