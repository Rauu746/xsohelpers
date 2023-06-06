<?php

include("config2.php");
$result=mysqli_query($mysqli,"SELECT* from lbsdtb ORDER by id DESC");


?>

<!doctype html>
<html>
    <head>
        <title></title>
</head>  
<body>
<h1 style="color:GREEN" align-text="center">FILL YOUR SERVICE ADDRESS
    </h1>  

<form action="func2.php" method="POST">
    Name<input type="text" name="name"><br>
    Email<input type="email" name="email"><br>
    Mobile<input type="mobile" name="mobile"><br>
    Address<input type="text" name="address"><br>
    <input type="submit" name="submit">
</form>

<table border="2">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>Address</th>

</tr>
<?php
while($res=mysqli_fetch_array($result)){
    
    echo '<tr>';
    echo '<td>'.$res['name'].'</td>';
    echo '<td>'.$res['email'].'</td>';
    echo '<td>'.$res['mobile'].'</td>';
    echo '<td>'.$res['address'].'</td>';

    echo'</tr>';
}
?>
</table>

</body>
    </html>