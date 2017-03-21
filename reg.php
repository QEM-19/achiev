<?php
include "reg_handler.php";
?>

<html>
<head>
    <title>Регистрация</title>
    <meta charset="UTF-8">
    <link href="main.css" rel="stylesheet">
</head>

<body class="body_style"><?php include "head.php"; ?>

<div class="main_wrapper">

    <!--    блок информации и пользователе-->
    <div class="main_block">
        <div class="auth">
            <form action="" method="post" enctype="multipart/form-data">
                Никнейм: <input type="text" class="enter" size="30" name="nickname" value="<?php echo $_POST["nickname"];?>">
                <br><br>
                Описание: <textarea cols="40" class="enter" rows="5" name="description"><?php echo $_POST["description"];?></textarea><br><br>
                Фото: <input type="file" name="photo" id="idPhoto" accept="image/*"><br><br>
                Логин: <input type="text" class="enter" name="login" value="<?php echo $_POST["login"];?>"><br><br>
                Пароль: <input type="password" class="enter" name="password" value="<?php echo $_POST["password"];?>"><br><br>
                <input type="submit" value="Добавить">
            </form>
        </div>
    </div>


</div>

</body>
</html>