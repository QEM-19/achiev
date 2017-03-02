<?php
setcookie("affort", "", time() + 300);  /* срок действия 5 минут */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация</title>
</head>
<body>
<form action="auth_handler.php">
    <input type="text" name="login"><br><br>
    <input type="password" name="pass"><br><br>
    <input type="submit">
    <br>
    <a href="reg.php">Регистрация</a>
</form>
</body>
</html>