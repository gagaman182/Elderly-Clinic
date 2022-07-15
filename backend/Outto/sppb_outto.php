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
	CASE
WHEN sppb.sppb1 = '1.1' THEN
	'Side-by-side stand > 10 sceonds'
WHEN sppb.sppb1 = '1.2' THEN
	'Semi-tandem stand > 10 sceonds'
END AS sppb1,
 CASE
WHEN sppb.sppb2 = '2' THEN
	'>= 10 seconds'
WHEN sppb.sppb2 = '1' THEN
	'3.00-9.99 seconds'
WHEN sppb.sppb2 = '0' THEN
	'<= 2.99 seconds'
END AS sppb2,
 CASE
WHEN sppb.sppb3 = '4' THEN
	'< 4.82 seconds'
WHEN sppb.sppb3 = '3' THEN
	'4.82-6.20 seconds'
WHEN sppb.sppb3 = '2' THEN
	'6.21-8.70 seconds'
WHEN sppb.sppb3 = '1' THEN
	'> 8.70 seconds'
WHEN sppb.sppb3 = '0' THEN
	'Unable to walk'
END AS sppb3,
 CASE
WHEN sppb.sppb4 = '4' THEN
	'< 11.2 seconds'
WHEN sppb.sppb4 = '3' THEN
	'11.20 - 13.69 seconds'
WHEN sppb.sppb4= '2' THEN
	'13.70 - 16.69 seconds'
WHEN sppb.sppb4 = '1' THEN
	'>= 16.70 seconds'
WHEN sppb.sppb4 = '0' THEN
	'Unable to perform maneuver or > 60 seconds to complete'
END AS sppb4,
sppb.result,
sppb.outto


       
FROM
	regis
INNER JOIN sppb ON regis.cid = sppb.cid
LEFT JOIN cmus ON regis.cmu = cmus.id
AND regis.hn = sppb.hn
AND regis.assessor_date = sppb.assessor_date
WHERE
	sppb.outto IS NOT NULL
     
      ";


$return_arr = array();

if ($result = mysqli_query($conn, $sql)) {
  while ($row = mysqli_fetch_assoc($result)) {

    array_push($return_arr, $row);
  }
}

mysqli_close($conn);

echo json_encode($return_arr);