<?php
setcookie("affort", "", time() + 300);  /* срок действия 5 минут */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Авторизация</title>
    <meta charset="UTF-8">
    <link href="main.css" rel="stylesheet">
</head>

<body class="main_style">

<div class="head_logotip">
    <p><font size="15" color="blace" >The Diary Achievements</font></p>
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/core.css">
</div>


</body>

<body>

<form action="auth_handler.php">
	
		<input type="text" name="login"><br><br>
		<input type="password" name="pass"><br><br>
		<input type="submit">
		<br>
		<a href="reg.php"  align="center" >Регистрация</a>
	
</form>

</body>

</html>