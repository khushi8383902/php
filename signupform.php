<?php

require_once("sconnection.php");

    if(isset($_POST["submit"])){

       $email = $_POST["email"];

       $psword = $_POST["psword"];


       $insert = "INSERT INTO signupformtb (email,psword)
       VALUES('$email','$psword')";

       $query = mysqli_query($conn,$insert);

       if($query){


    //     echo "value postt";
    //    }else{

    //     echo "failed";
    //    }
    }

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="POST" >
        <label for="email">email</label>
        <input type="email" name="email" placeholder="Enter your email">
        <br><br>

        <label for="password">Password</label>
        <input type="password" name="psword" placeholder="Enter your password">
        <br><br>

        <input type="submit" name="submit" value="sign up">
</body>
</html>