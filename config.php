<?php
// Connect to database
$server = "localhost";
$user = "thiennc"; 
$pass = "11072001";
$dbname = "embedded";

$conn = mysqli_connect($server,$user,$pass,$dbname);

// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


?>