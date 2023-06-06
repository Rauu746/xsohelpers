<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
*{
    padding: 0px ;
    margin: 0px;
    font-family:sans-serif ;
}

body{
   background-image: url("images/asdf.jpg");
    background-size: cover;
    text-align: center;
}

.contact-form{
    margin-top: 100px;
    color: #ff5722;
    text-transform: uppercase;
    transition: all 4s ease-in-out;
}

.contact-form h1{
    font-size: 32px;
}


form{
    margin-top: 50px;
    transition: all 4s ease-in-out ;
}

.form-control{
    width: 400px;
    background: transparent;
    border: none;
    outline: none;
    border-bottom: 1px solid gray;
    color: #fff;
    font-size: 18px;
    margin-bottom: 18px;
}


input{
    height: 45px;
}

form .submit{
    background: #ff5722;
    border: transparent;
    color: #fff;
    font-size: 20px;
    font-weight: bold;
    letter-spacing: 2px;
    height: 50px;
    margin-top: 20px;
}

form .submit:hover{
    background: #f44336;
    cursor: pointer;
}


        </style>
</head>
<body>
    <div class="contact-form">
        <h1>Database <Form></Form></h1>
    </div>
    <div class="contact-us">
        <form action="bbb1.php" method="post">
            <input type="text" name="fname" placeholder="enter first name" class="form-control" required><br>
            <input type="text" name="lname" placeholder="enter last name" class="form-control" required><br>
            <input type="text" name="email" placeholder="enter email" class="form-control" required><br>
            <input type="text" name="mobile" placeholder="enter mobile number" class="form-control" required><br> 
            I am worker<input type="radio" name="faculitor" value="worker" checked><br>
            I am customer<input type="radio" name="faculitor" value="customer" checked><br>
            <input type="submit" value="submit" class="form-control submit">
        </form>
    </div>
</body>
</html>