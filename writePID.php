<?php
    // log in vao database
    include("config.php");
    // doc user input
    $kp = $_POST["kp"];
    $ki = $_POST["ki"];
    $kd = $_POST["kd"];
    // update lai database
    $sql = "UPDATE PID SET `p`='$kp',`ki`='$i',`d`='$kd' WHERE 1";
    mysqli_query($conn, $sql);
    mysqli_close($conn);


?>  