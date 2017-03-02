<form action="reg_handler.php" method="post" enctype="multipart/form-data">
    Никнейм: <input type="text" size="30" name="nickname">
    <br><br>
    Описание: <textarea cols="40" rows="5" name="description"></textarea><br><br>
    Фото: <input type="file" name="photo" accept="image/*"><br><br>
    Логин: <input type="text" name="login"><br><br>
    Пароль: <input type="password" name="password"><br><br>
    <input type="submit" value="Добавить">
</form>