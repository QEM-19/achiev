<?php
//подключаем обработчик действий на этой странице
include "change_handler.php";
CheckAuth();
?>

<html>
<head>
    <title>The Diary Achievements</title>
    <meta charset="UTF-8">
    <link href="main.css" rel="stylesheet">
</head>

<body class="body_style"><?php include "head.php"; ?>

<div class="main_wrapper">

    <?php
    $result = ConnectBd()->query("SELECT * FROM `users` WHERE `id`='" . getIdByLogin($_COOKIE["login"]) . "'");
    $result->data_seek();
    $row = $result->fetch_row();
    ?>

    <div class="right_block_add_achiev">
        <div class="back_right_add">
            <form action="change_handler.php" method="post" enctype="multipart/form-data">
                Никнейм: <input type="text" size="30" name="nickname" value="<?php echo $row[1]; ?>"> <br><br>
                Описание: <textarea cols="40" rows="5" name="description"><?php echo $row[2]; ?></textarea><br><br>
                Фото: <input type="file" name="photo" id="idPhoto" accept="image/*"><br><br>
                <input type="submit" value="Добавить">
            </form>
        </div>
    </div>
</div>

</body>
</html>
