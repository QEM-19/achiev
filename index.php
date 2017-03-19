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

<body class="body_style">

<div class="main_wrapper">
    <div class="head_style">
        <img src="img/logo.png" class="logo">
        <img src="img/users.png" class="users">
    </div>


<!--    блок информации и пользователе-->
    <div class="main_block">
        <div class="head_main_block">
            <div class="login_main_block">QEM</div>
            <img src="img/settings.png" class="settings">
            <img src="img/exit.png" class="exit_icon">
        </div>
        <div class="ava" style="background: url(img/ava.jpg)"></div>
        <div class="info">Я норм поц</div>
        <div class="rate">100</div>
        <div class="add">Добавить</div>
        <div class="add">Unagree</div>
    </div>
<!--    ачивки пользователя-->

    <div class="achiev">
        <div class="ava_achiev" style="background: url(img/behemot.jpg)"></div>
        <div class="head_achiev">
            <div class="login_main_block">Сдох в альпах</div>
            <img src="img/del.png" class="exit_icon">
            <div class="status">-</div>
        </div>
        <div class="body_achiev">
            <div class="info_achiev">Сдох крч</div>
            <div class="date_achiev">10-10-2010</div>
        </div>
    </div>


</div>

</body>
</html>