<?php
if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    echo $email;
    echo $password;
}
?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap');

    *{
        font-family: "Roboto", sans-serif;

    }

    .main{
        width: 30%;
        margin-left: 35%;
        box-shadow: 5px 5px 15px 0px rgba(0, 0, 0, 0.20);
border-radius: 8px;
    }

    h1{
        font-size:40px;
        margin-left:30px;
        padding-top:20px;
    }

    form{
        font-size:20px;
        margin-left:30px;
        width: 88%;
        padding-bottom:30px;
        line-height:10px;

    }

    p{
        font-size:15px;
    }

    input{
        border:1px solid black;
        border-radius: 30px;
        height: 40px;
        width: 100%;
    }

    .radio{
        width:3%;
    }

    a{
        padding-left:290px;
        margin-top: 50px;
        font-size:15px;
        line-height:40px;
    }

    .para{
        font-size: 15px;
    }

    .sub{
        background-color:blue;
        color:white;
        font-size:20px;
        border:none;

    }

    .subi{
        display:flex;
    }

</style>

<body>
    <div class="main">

    <h1>Sign in</h1>
    <form action="" method="POST">

        <p>Rediffmail ID :</p>
        <br>
        <input type="text" name="email">
        <br><br>
        <p>Password :</p>
        <br>
        <input type="text" name="password">
        <br>
        <a href="#">Forget password?</a>
        <br>
        <div class="subi">
        <input type="radio" name="remember" id="" class="radio"><p class="para">Remember my email ID on this Computer</p>
        </div>
        <br>
        <input type="submit" value="submit" class="sub">

    </form>

    </div>
</body>
</html>