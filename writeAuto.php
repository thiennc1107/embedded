<?php
    // log in vao database
    include("config.php");
    // doc user input
    $batdautuoi = $_POST["bdtuoi"];
    $ketthuctuoi = $_POST["kttuoi"];
    $batden = $_POST["bden"];
    $tatden = $_POST["tden"];
    // update lai database
    $sql = "UPDATE Auto SET `den_bat`='$batden ',`den_tat`='$tatden,`tuoi_bat`=' $batdautuoi',`tuoi_tat`='$ketthuctuoi' WHERE 1";
    mysqli_query($conn, $sql);
    mysqli_close($conn);


?>  