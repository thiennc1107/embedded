<?php
    // log in vao database
    include("config.php");
    // doc user input
    $batdautuoi = $_POST["bdtuoi"];
    $ketthuctuoi = $_POST["kttuoi"];
    $batden = $_POST["bden"];
    $tatden = $_POST["tden"];
    $chedo  = $_POST["chedo"];
    $tuoi = $_POST["tuoi"];
    $den =$_POST["den"];
    // update lai database
    $sql = "update Timer set batdautuoi=$batdautuoi,ketthuctuoi=$ketthuctuoi,batden=$batden,tatden=$tatden,chedo=$chedo,tuoi=$tuoi,den=$den";
    mysqli_query($conn, $sql);
    mysqli_close($conn);


?>  