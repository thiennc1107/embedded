<?php
    // log in vao database
    include("config.php");
    // doc user input
    $tuoi = $_POST["tuoi"];
    $den =$_POST["den"];
    // update lai database
    $sql = "update Timer set tuoi=$tuoi,den=$den";
    mysqli_query($conn, $sql);
    mysqli_close($conn);


?>  