<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Acess-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization');

// File name
$filename = $_FILES['file']['name'];
$cid  = $_POST["cid"];

// Valid file extensions
$valid_extensions = array("jpg", "jpeg", "png", "pdf");

// File extension
$extension = pathinfo($filename, PATHINFO_EXTENSION);

// Check extension
if (in_array(strtolower($extension), $valid_extensions)) {
    $filenames = $cid;

    $temp = explode(".", $_FILES["file"]["name"]);
    $newfilename = $filenames . '.' . end($temp);

    // Upload file
    if (move_uploaded_file($_FILES['file']['tmp_name'], "data/" . $newfilename)) {
        echo $cid;
    } else {
        echo 0;
    }
} else {
    echo 0;
}

exit;