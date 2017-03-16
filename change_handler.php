<?php
if ($_COOKIE["flag"] == "false"){
    if (strlen($_POST["nickname"]) >= 3 && strlen($_POST["nickname"]) <= 20) {
        //проверка на длину описания
        if (strlen($_POST["description"]) >= 1 && strlen($_POST["description"]) <= 300) {
            $query = "UPDATE `users` SET `nickname` = '" . $_POST["nickname"] . "', `description`= '" . $_POST["description"] . "' WHERE `id`= '" . getIdByLogin($_COOKIE["login"]) . "'";
            sendQuery($query);
            //проверяем, есть ли что-то в файлах
            $uploadfile = "C:/xampp/htdocs/achiev/img/" . basename($_FILES['photo']['name']);
            if ($_FILES["photo"]["size"] != 0 && move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile)) {
                $query = "UPDATE `users` SET `url_photo`='" . basename($_FILES['photo']['name']) . "' WHERE `id`= '" . getIdByLogin($_COOKIE["login"]) . "'";
                sendQuery($query);
            }
            header('Location: http://localhost/achiev/index.php');
        } else
            echo "Длина описания должна быть от 0 до 300 символов<br>";
    } else
        echo "Длина ника должна быть от 3 до 20 символов<br>";
}