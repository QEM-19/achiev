<?php
include "functions.php";
CheckAuth();
if(getStringResult("SELECT status FROM achiev.achiev_link WHERE `id`=".$_GET["id"]) == "Проверено") {
    sendQuery("UPDATE `users` SET `rate`=`rate`-30 WHERE `id` =" . getStringResult("SELECT id_user FROM achiev.achiev_link WHERE `id`=" . $_GET["id"]));
}else{
    sendQuery("UPDATE `users` SET `rate`=`rate`-10 WHERE `id` =" . getStringResult("SELECT id_user FROM achiev.achiev_link WHERE `id`=" . $_GET["id"]));
}
sendQuery("DELETE FROM `achiev_link` WHERE `id` = '".$_GET["id"]."'");

header('Location: http://localhost/achiev/'.$_GET["from"]);