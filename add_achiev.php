<?php
include "functions.php";
//проверяем авторизацию
CheckAuth();
//подключаем обработчик действий на этой странице
include "add_handler.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="main.css" rel="stylesheet">
    <title>Добавление ачивки</title>
</head>
<body class="body_style">


<div class="main_add_block">
<!--    отображение шапки-->
    <?php include "head.php";?>

    <div class="left_block_add_achiev">
        <?php
        //делаем запрос и выводим все ачивки
        $result = ConnectBd()->query("SELECT * FROM `achievements`");
        for ($i = 0; $i < $result->num_rows; $i++) {
            $result->data_seek($i);
            $row = $result->fetch_row();
            ?>
            <a href="add_achiev.php?achiev=<?php echo $row[0]?>"><div class="item_add_achiev"><?php echo $row[1] ?></div></a><br>
        <?php
        }
        ?>
    </div>

    <div class="right_block_add_achiev">
        <div class="back_right_add">
        <form action="add_achiev.php?action=add_achiev&achiev=<?php echo $_GET["achiev"] ?>" method="post"
              enctype="multipart/form-data">
            Название Achiev'ки: <input type="text" readonly value="<?php echo getNameById($_GET["achiev"]) ?>"
                                       style="background: #c7c7c7" size="30" name="name">
            <br><br>
            Описание: <textarea cols="40" rows="5" name="description"></textarea><br><br>
            Дата: <input type="text" name="date"><br><br>
            Фото: <input type="file" name="photo" accept="image/*"><br><br>
            <input type="submit" value="Добавить">
        </form>
        </div>
        <div class="add_block_add_achiev">
            <form action="add_achiev.php?action=add" method="post">
                Добавить ачивку<br>
                <input type="text" name="name" style="width: 210px">
                <input type="submit" value="Добавить">
            </form>
        </div>
    </div>


</div>
</body>
</html>