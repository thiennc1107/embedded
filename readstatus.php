<?php
header('Content-Type: application/json');

// dang nhap vao database
include("config.php");

$sql = "SELECT `speed` FROM `status` WHERE 1";
$result = mysqli_query($conn,$sql);

$data = array();
foreach ($result as $row){
    $data[] = $row;
}

mysqli_close($conn);
echo json_encode($data);

?>