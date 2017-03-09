<?php

include "functions.php";

if (!empty($_GET["id"]))
{
    echo " Получены новые вводные: id - ".$_GET["id"]."";
    $query = "UPDATE `achiev_link` SET `status` = 'Проверено' WHERE `id`= ". $_GET["id"] ;
    sendQuery($query);
    header('Location: http://localhost/achiev/unaggree_achives.php');
}

?>