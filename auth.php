<?php
include "functions.php";
setcookie("affort", "", time() + 300);  /* срок действия 5 минут */
setcookie("login", "", time() + 100);
?>

<html>
<head>
    <title>Авторизация</title>
    <meta charset="UTF-8">
    <link href="main.css" rel="stylesheet">
</head>

<body class="body_style"><?php include "head.php"; ?>

<div class="main_wrapper">

    <!--    блок информации и пользователе-->
    <div class="main_block">
        <div class="auth">
                <form action="auth_handler.php">
                    <input type="text" name="login" class="enter"><br><br>
                    <input type="password" name="pass" class="enter"><br><br>
                    <input type="submit">
                    <br>
                    <a href="reg.php">Регистрация</a>
                </form>
        </div>
    </div>


</div>

</body>
</html>