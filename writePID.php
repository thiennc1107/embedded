<?php
    // log in vao database
    include("config.php");
    // doc user input
    $kp = $_POST["kp"];
    $ki = $_POST["ki"];
    $kd = $_POST["kd"];
    // update lai database
    $sql = "UPDATE `pid` SET `P`='$kp',`I`='$ki',`D`='$kd' WHERE 1";
    mysqli_query($conn, $sql);
    mysqli_close($conn);


?>  