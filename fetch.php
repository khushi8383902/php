<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,tr,th,td{
             border :2px solid black ;
             border-collapse : collapse;
             margin : auto;
             padding :10px ;

        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>id</th>
            <th>email</th>
            <th>password</th>
        </tr>
       
        <?php

        require_once("sconnection.php");
        $select = "SELECT * FROM signupformtb";
        $query = mysqli_query($conn,$select);
        while($fetch = mysqli_fetch_assoc($query)){

        ?>

        <tr>
            <td><?php echo $fetch["id"] ?></td>
            <td><?php echo $fetch["email"] ?></td>
            <td><?php echo $fetch["psword"] ?></td>
        </tr>

        <?php } ?>



    </table>
</body>
</html>