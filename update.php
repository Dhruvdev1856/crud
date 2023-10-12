<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>

        function getDetails(c1)
        {
               uid=c1.value;
              // alert(uid); 
              window.location="update.php?userid="+uid;  // URL-rewrite

        }

    </script>

</head>

<?php


        require "connect.php";
        $msg="";
        $usrid="";
        $nm="";
        $pas="";
        $gen="";
        $m="";
        $f=""; 
        if(isset($_REQUEST["userid"]))
        {
            $usrid = $_REQUEST["userid"];



             $qr="SELECT * FROM reg WHERE uid='$usrid'";
            $resultset1 = mysqli_query($cn,$qr);

            if($row=mysqli_fetch_array($resultset1))
            {
                $nm = $row[1];
                $usrid = $row["uid"];
                $pas = $row["pass"];
                $gen = $row["gender"];

                if($gen=="M")
                {
                    $m="checked='checked'";
                }
                else
                {
                    $f="checked='checked'";
                }
            }
            else
            {
                $msg="Sorry this id $usrid doesnt exists!";
            }

        }


?>


<body>
<form method="post" action="processUpdate.php" name="frm1">

UserID : <input type="text" name="utxt" onblur="getDetails(this)" value="<?php echo $usrid ?>" /><br/>
Name : <input type="text" name="nmtxt"  value="<?php echo $nm ?>" /><br/>

Password : <input type="password" name="ptxt" value="<?php echo $pas ?>" /><br/>
Confirm Password : <input type="password" name="cptxt" value="<?php echo $pas ?>" /><br/>

Gender : <input type="radio" name="g" value="M" <?php echo $m ?>/>Male
<input type="radio" name="g" value="F" <?php echo $f ?>  />Female<br/>
 <input type="submit" name="submit" value="Update"  /><br/>
 <?php print $msg  ?>

</form>
</body>
</html>