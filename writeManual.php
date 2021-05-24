<?php
    // log in vao database
    include("config.php");
    // doc user input
    $tuoi = $_POST["tuoi"];
    $den =$_POST["den"];
    // update lai database
    $sql = "UPDATE `Manual` SET `Den`='$den',`Tuoi`='$den' WHERE 1";
    mysqli_query($conn, $sql);
    mysqli_close($conn);


?>  