<?php
include "functions.php";
CheckAuth();
?>

<html>
<head>
    <title>Главная страница</title>
    <link href="main.css" rel="stylesheet">
</head>
<body>
Вы авторизованы, как: <?php echo $_COOKIE["login"] ?> <br>
    <a href="add_achiev.php">Добавить ачивку</a><br>
    <a href="top_users.php">Топ пользователей</a><br>
<a href="unaggree_achives.php">Вывод неподтвержденных</a><br>
    <?php include "output_achiev.php"?>
</body>
</html>

