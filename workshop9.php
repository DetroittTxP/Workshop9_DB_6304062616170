<!DOCTYPE html>
<html lang="en">
<?php include "connect.php" ?>    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MainWebofWk6</title>

   
</head>
<body>
    <?php
        $member = $pdo->prepare("SELECT * FROM member");
        $member->execute();

        while($row=$member->fetch()){
    ?>
        ชื่อสมาชิก: <?=$row["username"]?><br>
        ที่อยู่: <?=$row["address"]?><br>
        อีเมล: <?=$row["email"]?><br>
        <a href="editFormwk9.php?username=<?=$row["username"]?>">เเก้ไข</a>
        <hr>


    <?php } ?>
</body>
</html>