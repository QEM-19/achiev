<?php
include "functions.php";
CheckAuth();
?>

<html>
<head>
    <title>Дневник Достижений</title>
    <meta charset="UTF-8">
    <link href="main.css" rel="stylesheet">
</head>

<body class="main_style">

<div class="head_logotip">
    <p><font size="15" color="blace" >The Diary Achievements</font></p>
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/core.css">
</div>

<div class="all_information_about_user">
    <div class="photo">
<<<<<<< Updated upstream
        <img src="img/<?php echo getStringResult("SELECT url_photo FROM `users` WHERE `id`='" . getIdByLogin($_COOKIE["login"]) . "'");?>" style="width:280px; height:300px; margin:40px 0 0 170px;" >
    </div>

=======
	<a href="add_achiev.php"><img src="img/pess.png" style="width:280px; height:300px; margin:40px 0 0 170px;" >
          
	</div>
>>>>>>> Stashed changes

    <div class="name">
        <p><font size="5" text="center" color="black" ><?php echo getStringResult("SELECT description FROM `users` WHERE `id`='" . getIdByLogin($_COOKIE["login"]) . "'");?><br>
                <?php echo getStringResult("SELECT nickname FROM `users` WHERE `id`='" . getIdByLogin($_COOKIE["login"]) . "'"); ?> </font></p>


        <div class="rating">
<<<<<<< Updated upstream
            <p><font size="6" color="black" > <?php echo getStringResult("SELECT rate FROM `users` WHERE `id`='" . getIdByLogin($_COOKIE["login"]) . "'");?> </font></p>
=======
            <p><font size="9" color="black" >1000%</font></p>
>>>>>>> Stashed changes
        </div>
    </div>

</div>

<html lang="en">
<head>
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

<a href="add_achiev.php" class="action-button shadow animate Add"> + Add</a>

<a href="top_users.php" class="action-button shadow animate Top_users">Top users</a>

<a href="unaggree_achives.php" class="action-button shadow animate Agree">Agree</a>

<a href="change_info.php" ><font size="5" color="white">change_info</a>

<?//php include "output_achiev.php"?>


</body>
</html>