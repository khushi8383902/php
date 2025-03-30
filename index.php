<?php
require_once("connection.php");
if(isset($_POST["submit"])){

    $studentsname =$_POST["studentsname"];

    $gender =$_POST["gender"];

    $city =$_POST["city"];

    $mobile =$_POST["mobile"];

    $email =$_POST["email"];

    $psword =$_POST["psword"];

    $insert = "INSERT INTO studentsdetailsttb(studentsname,gender,city,mobile,email,psword)
    VALUE('$studentsname','$gender','$city','$mobile','$email','$psword')";
    
    $query = mysqli_query($conn,$insert);

    if ($query){
        echo "form submitted";
    
    }else{
        echo "oops...something went worng";
    }
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
    <form action="" method="POST">  
        <label for="stname">student name:</label>
        <input type="text" name="studentsname" id="stname">
        <br><br>

        <input type="radio" name="gender" value="m" id="male">
        <label for="male">male</label>

        <input type="radio" name="gender" value="f" id="female">
        <label for="female">female</label>
        <br><br>

         <label for="state">state:</label>
        <select name="city" id="city">
            <option>choose</option>
            <option value="DL">delhi</option>
            <option value="UP">up</option>
            <option value="RJ">rajasthan</option>
            <option value="BR">bihar</option>
        </select>
        <br><br>

        <label for="mb">mobile:</label>
        <input type="text" name="mobile" id="mb">
        <br><br>

       <label for="em">email:</label>
       <input type="email" name="email" id="em">
       <br><br>

       <label for="psword">password:</label>
       <input type="password" name="psword" id="pass">
       <br><br>

      <input type="submit" value="register" name="submit">

    </form>
</body>
</html>