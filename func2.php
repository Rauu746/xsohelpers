<HTML>
    <TITLE> </TITLE>
    <body>
    <h1 style="color:GREEN" align-text="center">SUBMITTED YOUR ADDRESS MISTRI WILL BE SOON REACH YOUR ADDRESS
    </h1> 
</body>
</HTML>


<?php
include("config2.php");
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $address=$_POST['address'];

    $result=mysqli_query($mysqli,"INSERT into lbsdtb VALUES('','$name','$email','$mobile','$address')");

if($result)
{
    header("table1.php");
}
else{
    echo "failed";
}
}
?>