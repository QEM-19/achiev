<?php
include "functions.php";
//echo "Данные: строка - ". $_POST['nickname'].", цифра - ".$_POST['description'];
$query = "UPDATE `users` SET `nickname` = '" . $_POST["nickname"] . "', `description`= '" . $_POST["description"] . "' WHERE `id`= '" . getIdByLogin($_COOKIE["login"]) . "'";
sendQuery($query);