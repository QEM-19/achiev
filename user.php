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

<body class="body_style"><?php include "head.php";?>

<div class="main_wrapper">


    <?php
    //загружаем всю информацию о пользователе
    $result = sendQuery("SELECT * FROM users WHERE `id`='" . $_GET["id"] . "'");
    if ($result->num_rows != 0) {
    $result->data_seek(0);
    $user = $result->fetch_row();
    ?>

    <!--    блок информации и пользователе-->
    <div class="main_block">
        <div class="head_main_block">
            <div class="login_main_block"><?php echo $user[1] ?></div>
        </div>
        <div class="ava" style="background: url(img/<?php echo $user[6] ?>); background-size: cover"></div>
        <div class="info"><?php echo $user[2] ?></div>
        <div class="rate"><?php echo $user[5] ?></div>
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
            <div class="ava_achiev" style="background: url(img/<?php echo $achiev[2] ?>); background-size: cover"></div>
            <div class="head_achiev">
                <div class="login_main_block"><?php echo getStringResult("SELECT name FROM achiev.achievements WHERE `id`='" . $achiev[1] . "'") ?></div>
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
<?php } else{?>
        <div class="main_block">
            <center><font color="white">Такого пользователя нет</font></center>
        </div>
    <?php }?>
</div>

</body>
</html>