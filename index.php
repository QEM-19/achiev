<?php
include "functions.php";
CheckAuth();
?>

<html>
<head>
    <title>Дневник Достиженийa</title>
    <meta charset="UTF-8">
    <link href="main.css" rel="stylesheet">
</head>

<body class="main_style">

<div class="head_logotip">
    <p><font size="15" color="blace" >Дневник Достижений</font></p>
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/core.css">
</div>

<div>
    <div class="photo">
        <img src="img/<?php echo getStringResult("SELECT url_photo FROM `users` WHERE `id`='" . getIdByLogin($_COOKIE["login"]) . "'");?>" style="width:280px; height:300px; margin:40px 0 0 170px;" >
    </div>


    <div class="name">
        <p><font size="5" text="center" color="black" ><?php echo getStringResult("SELECT description FROM `users` WHERE `id`='" . getIdByLogin($_COOKIE["login"]) . "'");?><br>
                <?php echo getStringResult("SELECT nickname FROM `users` WHERE `id`='" . getIdByLogin($_COOKIE["login"]) . "'"); ?> </font></p>


        <div class="rating">
            <p><font size="6" color="black" > <?php echo getStringResult("SELECT rate FROM `users` WHERE `id`='" . getIdByLogin($_COOKIE["login"]) . "'");?> </font></p>
        </div>
    </div>

</div>

<html lang="en">
<head>
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

<a href="add_achiev.php" class="action-button shadow animate blue"> + Add</a>

<a href="top_users.php" class="action-button shadow animate red">Top users</a>

<a href="unaggree_achives.php" class="action-button shadow animate red">Agree</a>

<a href="change_info.php" ><font size="5" color="white">change_info</a>

<?//php include "output_achiev.php"?>

</body>
</html>