<?php
include "reg_handler.php";
?>
<form action="" method="post" enctype="multipart/form-data">
    Никнейм: <input type="text" size="30" name="nickname" value="<?php echo $_POST["nickname"];?>">
    <br><br>
    Описание: <textarea cols="40" rows="5" name="description"><?php echo $_POST["description"];?></textarea><br><br>
    Фото: <input type="file" name="photo" id="idPhoto" accept="image/*"><br><br>
    Логин: <input type="text" name="login" value="<?php echo $_POST["login"];?>"><br><br>
    Пароль: <input type="password" name="password" value="<?php echo $_POST["password"];?>"><br><br>
    <input type="submit" value="Добавить">
</form>