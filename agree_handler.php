<?php

include "functions.php";

if (!empty($_GET["id"]))
{
    $query = "UPDATE `achiev_link` SET `status` = 'Проверено' WHERE `id`= ". $_GET["id"] ;
    sendQuery($query);
    $query = "UPDATE `users` SET `rate` = `rate`+20 WHERE `id`= ".getStringResult("SELECT id_user FROM achiev.achiev_link WHERE `id`=".$_GET["id"]);
    sendQuery($query);
    header('Location: http://localhost/achiev/unaggree_achives.php');
}

?>