<?php

    include "connect.php";

    $ui = $_REQUEST["utxt"];
    $pa = $_REQUEST["ptxt"];

    $qr="SELECT * FROM reg WHERE uid='$ui' and binary pass='$pa'";
    $res= mysqli_query($cn,$qr);

    if($row= mysqli_fetch_array($res))
    {
            echo "Welcome!";
    }
    else
    {

            echo "Plz check ur userid or password!";
    }


    






?>