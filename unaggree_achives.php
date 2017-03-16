<?php
include "functions.php";
CheckAuth();
?>

<html>
<head>
     <title>Неподтвержденные пользователи</title>
    <meta charset="UTF-8">
    <link href="main.css" rel="stylesheet">
</head>

<body class="main_style">

<div class="head_logotip">
    <p><font size="15" color="blace" >The Diary Achievements</font></p>
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/core.css">
</div>
</head>
<body>

<a href="index.php"><h1>Главная страница</h1></a><br>
<?php
$result = sendQuery("SELECT * FROM `achiev_link` WHERE `id_user`='" . getIdByLogin($_COOKIE["login"]) . "' and `status`= 'Не проверено'");
for ($i = 0; $i < $result->num_rows; $i++) {
    $result->data_seek($i);
    $row = $result->fetch_row();?>
	
	
	
<div class="ach_all">
    <hr>
    id: <?php echo $row[0];?><br>
    Название: <?php echo getStringResult("SELECT name FROM `achievements` WHERE `id`='".$row[1]."'")?> <br>
    Фото: <img src="img/<?php echo $row[2];?>" width="100" height="100"><br>
    Описание: <?php echo $row[3];?><br>

    <form  method="post" action="http://localhost/achiev/agree_handler.php?id=<?php echo $row[0] ?>">
        <input type='submit' value="KNOPKA">
    </form>
    <hr>
</div>
    <?php
}

?>



</body>
</html>

