<?php
    // log in vao database
    include("config.php");
    // doc user input
    $batdautuoi = $_POST["bdtuoi"];
    $ketthuctuoi = $_POST["kttuoi"];
    $batden = $_POST["bden"];
    $tatden = $_POST["tden"];
    // update lai database
    $sql = "INSERT INTO `Auto` (`den_bat`, `den_tat`, `tuoi_bat`, `tuoi_tat`) VALUES ('$batden ', '$tatden', '$batdautuoi', '$ketthuctuoi'), ('', '', '', '')";
    mysqli_query($conn, $sql);
    mysqli_close($conn);


?>  