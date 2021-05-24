<?php
    // log in vao database
    include("config.php");
    // doc user input
    $batdautuoi = $_POST["bdtuoi"];
    $ketthuctuoi = $_POST["kttuoi"];
    $batden = $_POST["bden"];
    $tatden = $_POST["tden"];
    // update lai database
    $sql = "UPDATE Auto SET `den_bat`='12:00:00',`den_tat`='12:00:00',`tuoi_bat`='12:00:00',`tuoi_tat`='12:00:00' WHERE 1";
    mysqli_query($conn, $sql);
    mysqli_close($conn);


?>  