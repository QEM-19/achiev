<?php

if (!empty($_GET)) {
    if ($_GET["action"] == "add") {
        ConnectBd()->query("INSERT INTO `achievements` (`id`, `name`) VALUES ('" . genId("achievements") . "', '" . $_POST["name"] . "');");
        header('Location: http://localhost/achiev/add_achiev.php');
    }
    if ($_GET["action"] == "add_achiev") {
        $uploadfile = "C:/xampp/htdocs/achiev/img/" . basename($_FILES['photo']['name']);
        if ($_FILES["photo"]["size"] != 0 && move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile)) {
            //запрос на добавление, если пользователь загрузил картинку
            $query = "INSERT INTO `achiev_link` (`id`, `id_achiev`, `url_photo`, `description`, `status`, `id_user`, `date`) VALUES ('" . genId("achiev_link") . "', '" . $_GET["achiev"] . "', '" . basename($_FILES['photo']['name']) . "', '" .$_POST["description"] . "', 'Не проверено', '" . getIdByLogin($_COOKIE["login"]). "', '" . $_POST["date"] . "');";
            sendQuery($query);
            //запрос на изменение даты последнего добавления ачивки
            $query = "UPDATE `users` SET `last_date_add` = '".date("Y-m-d")."' WHERE `users`.`id` = ".getIdByLogin($_COOKIE["login"]);
            sendQuery($query);
            $query = "UPDATE `users` SET `rate` = '""'" WHERE `id`='".getIdByLogin($_COOKIE["login"])."'";
            header('Location: http://localhost/achiev/add_achiev.php');
        }
    }
}