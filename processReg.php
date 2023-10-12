<?php

 require "connect.php";


    $nam = $_REQUEST["nmtxt"];
    $uid = $_REQUEST["utxt"];
    $pas = $_REQUEST["ptxt"];
    $gen = $_REQUEST["g"];

    echo $qr="insert into reg values (null,'$nam','$uid','$pas','$gen')";
    mysqli_query($cn,$qr);



?>


