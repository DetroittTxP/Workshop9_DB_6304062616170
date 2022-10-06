<!DOCTYPE html>
<?php include "connect.php"?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
        $edi = $pdo->prepare("SELECT * FROM member WHERE username=?");
        $edi->bindParam(1,$_GET["username"]);
        $edi->execute();
        $row = $edi->fetch();
    ?>
</head>
<body>
    <form action="editProcessWk9.php" method="post">
        <input type="hidden" name="username" value="<?=$row["username"]?>"><br>
        ชื่อ: <input type="text" name="name" value="<?=$row["name"]?>"><br>
        ที่อยู่: <br> <textarea name="address" cols="30" rows="10"><?=$row["address"]?></textarea><br>
        อีเมล: <input type="email" name="email" value="<?=$row["email"]?>"><br><br>
        <input type="submit" value="เเก้ไขข้อมูลผู้ใช้">
    </form>
    
</body>
</html>