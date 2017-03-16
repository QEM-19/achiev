<!DOCTYPE html>
<html lang="en">
<head>
       <title>Добавление Достижения</title>
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
<?php
include "functions.php";
//проверяем авторизацию
CheckAuth();
//подключаем обработчик действий на этой странице
include "add_handler.php";
?>
			<html lang="en">
			<head>
				<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
				<link rel="stylesheet" href="css/main.css">
			</head>
			<body>

			<a href="index.php" class="action-button shadow animate Back">Back</a>
			</body>
			</html>
			
<div style="width: 900px">
    <div class="right_block_add_achiev">
        <?php
        //делаем запрос и выводим все ачивки
        $result = ConnectBd()->query("SELECT * FROM `achievements`");
        for ($i = 0; $i < $result->num_rows; $i++) {
            $result->data_seek($i);
            $row = $result->fetch_row();
            echo "<a href='add_achiev.php?achiev=".$row[0]."'>".$row[0]." " . $row[1]. "</a><br>";
        }
        ?>
    </div>

    <div class="body_add_achiev">
        <form action="add_achiev.php?action=add_achiev&achiev=<?php echo $_GET["achiev"]?>" method="post" enctype="multipart/form-data">
            Название Achiev'ки: <input type="text" readonly value="<?php echo getNameById($_GET["achiev"])?>" style="background: #c7c7c7" size="30" name="name">
            <br><br>
            Описание: <textarea cols="40" rows="5" name="description"></textarea><br><br>
            Дата: <input type="text" name="date"><br><br>
            Фото: <input type="file" name="photo" accept="image/*"><br><br>
            <input type="submit" value="Добавить">
        </form>
    </div>

    <div class="add_block_add_achiev">
        <form action="add_achiev.php?action=add" method="post">
            Добавить ачиивку<br>
            <input type="text" name="name" style="width: 210px">
            <input type="submit" value="Добавить">
        </form>
    </div>
</div>
</body>
</html>