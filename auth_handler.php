<?php
include "functions.php";
$query = "SELECT nickname FROM `users` WHERE `login`='" . $_GET["login"] . "'AND `password`='".$_GET["pass"]."'";
$result = ConnectBd()->query($query);
if($result->num_rows != 0){
    setcookie("login", $_GET["login"], time() + 1800);  /* срок действия 30 минут */
    setcookie("pass", $_GET["pass"], time() + 1800);  /* срок действия 30 минут */
    header('Location: http://localhost/achiev/index.php');
}else{
    header('Location: http://localhost/achiev/auth.php');
}