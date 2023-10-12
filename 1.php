<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

       <script>
       
        function checkBlank(c1,msg)
        {
               data=c1.value;
               
               l=data.length;
                if(l==0)
                {
                    alert(msg);
                    c1.focus();
                    return false;
                }
                return true;
        }
        function checkPasCpas(c1,c2,msg)
        {
            data1 = c1.value;
            data2 = c2.value;

            if(data1!=data2)
            {
                alert(msg);
                c1.value="";
                c2.value="";
                c1.focus();
                return false;
            }
            return true;

        }
        function checkGen(c1,msg)
        {

              if(!c1[0].checked && !c1[1].checked)
              {
                alert(msg);
                return false;
              }  
              return true;
        }


        function checkForm(f1)
        {

               with(f1)
               {
                    if(!checkBlank(nmtxt,"Name filed can not be left blank!"))
                    {
                      return false;  
                    }
                    if(!checkBlank(utxt,"UserID  can not be left blank!"))
                    {
                      return false;  
                    }
                    if(!checkPasCpas(ptxt,cptxt,"Password and conf pass must be same!"))
                    {
                      return false;  
                    }
                    if(!checkGen(g,"Plz select anyone of the gender!"))
                    {
                      return false;  
                    }

               } 

        }

       </script>
</head>
<body>
    

    <form method="post" action="processReg.php" name="frm1">


    Name : <input type="text" name="nmtxt" /><br/>
    UserID : <input type="text" name="utxt" /><br/>
    Password : <input type="password" name="ptxt" /><br/>
    Confirm Password : <input type="password" name="cptxt" /><br/>
    Gender : <input type="radio" name="g" value="M" />Male
    <input type="radio" name="g" value="F" />Female<br/>
     <input type="submit" name="submit" value="Register" onclick="return checkForm(frm1)" /><br/>


</form>



</body>
</html>