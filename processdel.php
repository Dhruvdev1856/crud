<?php

    require "connect.php";

    $duid = $_GET["utxt"];

    echo $qr="delete from reg where uid='$duid'";

    mysqli_query($cn,$qr);




?>