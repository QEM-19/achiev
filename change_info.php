<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="main.css" rel="stylesheet">
    <title>Редактирование информации</title>
</head>
<body>
<?php
include "functions.php";
//проверяем авторизацию
CheckAuth();
//подключаем обработчик действий на этой странице
include "change_handler.php";
?>
<a href="index.php"><h1>Главная страница</h1></a><br>
<div class="left_block_add_achiev">
    <?php
    $result = ConnectBd()->query("SELECT * FROM `users` WHERE `id`='" . getIdByLogin($_COOKIE["login"]) . "'");
    $result->data_seek();
    $row = $result->fetch_row();

    ?>
</div>

<div class="right_block_add_achiev">
    <form action="<?php setcookie("flag", "false", time() + 180); ?>" method="post" enctype="multipart/form-data">
        Никнейм: <input type="text" size="30" name="nickname" value="<?php echo $row[1];?>"> <br><br>
        Описание: <textarea cols="40" rows="5" name="description"><?php echo $row[2];?></textarea><br><br>

        Фото: <input type="file" name="photo" id="idPhoto" accept="image/*"><br><br>
        <input type="submit" value="Добавить">
    </form>
</div>
</body>
</html>