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
            $query = "INSERT INTO `achiev_link` (`id`, `page`, `title`, `image`, `description`, `full_description`) VALUES ('" . genId("items") . "', '" . trim($_POST["page"]) . "', '" . $_POST["title"] . "', '" . basename($_FILES['photo']['name']) . "', '" . $_POST["description"] . "', '" . $_POST["full_description"] . "');";
            sendQuery($query);
        }
    }
}