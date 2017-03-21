<?php
include "functions.php";
CheckAuth();
sendQuery("DELETE FROM `achiev_link` WHERE `id` = '".$_GET["id"]."'");

header('Location: http://localhost/achiev/'.$_GET["from"]);