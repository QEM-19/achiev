<?php
include "functions.php";
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
    //загружаем всю информацию о пользователе
    $result = sendQuery("SELECT * FROM users WHERE `login`='" . $_COOKIE["login"] . "'");
        $result->data_seek(0);
        $user = $result->fetch_row();
        ?>

        <!--    блок информации и пользователе-->
        <div class="main_block">
            <div class="head_main_block">
                <div class="login_main_block"><?php echo $user[1] ?></div>
                <a href="change_info.php"><img src="img/settings.png" class="settings"></a>
                <a href="auth.php"><img src="img/exit.png" class="exit_icon"></a>
            </div>
            <div class="ava" style="background: url(img/<?php echo $user[6] ?>); background-size: cover"></div>
            <div class="info"><?php echo $user[2] ?></div>
            <div class="rate"><?php echo $user[5] ?></div>
            <a href="add_achiev.php">
                <div class="add">Добавить</div>
            </a>
            <?php if ($user[8] == "admin") { ?><a href="unaggree_achives.php">
                <div class="add">Unagree</div>
            </a><?php } ?>
        </div>

        <!--    ачивки пользователя-->
        <?php
        //получаем все ачивки пользователя
        $result = sendQuery("SELECT * FROM achiev.achiev_link WHERE `id_user`='" . $user[0] . "'");
        for ($i = 0; $i < $result->num_rows; $i++) {
            $result->data_seek($i);
            $achiev = $result->fetch_row();
            ?>
            <div class="achiev">
                <div class="ava_achiev"
                     style="background: url(img/<?php echo $achiev[2] ?>); background-size: cover"></div>
                <div class="head_achiev">
                    <div class="login_main_block"><?php echo getStringResult("SELECT name FROM achiev.achievements WHERE `id`='" . $achiev[1] . "'") ?></div>
                    <a href="delete_handler.php?id=<?php echo $achiev[0] ?>&from=<?php echo currentPage() ?>"><img
                                src="img/del.png" class="exit_icon" alt="Удалить"></a>
                    <div class="status" <?php if ($achiev[4] == "Проверено") echo "style='background: green'" ?>><?php if ($achiev[4] == "Проверено") echo "<img src='img/galochka.png'>"; else echo "-" ?></div>
                </div>
                <div class="body_achiev">
                    <div class="info_achiev"><?php echo $achiev[3] ?></div>
                    <div class="date_achiev"><?php echo $achiev[6] ?></div>
                </div>
            </div>
            <?php
        }
        ?>
</div>

</body>
</html>