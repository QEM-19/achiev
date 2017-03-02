<?php
include "functions.php";

setcookie("affort", $_COOKIE["affort"] == "" ? 0 : $_COOKIE["affort"] + 1, time() + 300);  /* срок действия 5 минут */
//если пользователь только зашёл на страницу и ничего еще не вводил
if ($_COOKIE["affort"] != "") {
    //проверка на длину ника
    if (strlen($_POST["nickname"]) >= 3 && strlen($_POST["nickname"]) <= 20) {
        //проверка на длину описания
        if (strlen($_POST["description"]) >= 1 && strlen($_POST["description"]) <= 300) {
            //проверка на русский язык
            if (!isRussianLang($_POST["login"])) {
                //проверка длины логина
                if (strlen($_POST["login"]) >= 5 && strlen($_POST["login"]) <= 20) {
                    //проверка на уникальность логина
                    if (!isRepeatLogin($_POST["login"])) {
                        //проверка длина пароля
                        if (strlen($_POST["password"]) >= 6 && strlen($_POST["password"]) <= 20) {
                            //проверяем, есть ли что-то в файлах
                            $uploadfile = "C:/xampp/htdocs/achiev/img/" . basename($_FILES['photo']['name']);
                            if ($_FILES["photo"]["size"] != 0 && move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile)) {
                                //запрос на добавление, если пользователь загрузил картинку
                                $query = "INSERT INTO `users` (`id`, `nickname`, `description`, `login`, `password`, `rate`, `url_photo`, `last_date_add`) VALUES ('" . genId("users") . "', '" . $_POST["nickname"] . "', '" . $_POST["description"] . "', '" . $_POST["login"] . "', '" . $_POST["password"] . "', '" . 0 . "', '" . basename($_FILES['photo']['name']) . "', '" . date("Y-m-d") . "');";
                                sendQuery($query);
                                setcookie("login", $_POST["login"], time() + 1800);  /* срок действия 30 минут */
                                setcookie("pass", $_POST["password"], time() + 1800);  /* срок действия 30 минут */
                                header('Location: http://localhost/achiev/index.php');
                            } else
                                echo "Загрузите фото<br>";
                        } else
                            echo "Длина пароля должна быть от 6 до 20 символов<br>";
                    } else
                        echo "Такой логин уже есть";
                } else
                    echo "Длина логина должна быть от 5 до 20 символов<br>";
            } else
                echo "В логине не должно быть русских символов<br>";
        }else
            echo "Длина описания должна быть от 0 до 300 символов<br>";
    } else
        echo "Длина ника должна быть от 3 до 20 символов<br>";
}