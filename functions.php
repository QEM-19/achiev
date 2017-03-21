<?php
//подключается к базе
function ConnectBd()
{
    $mysqli = new mysqli("localhost", "QEM", "olinapopka", "achiev");
    $mysqli->set_charset("utf8");
    return $mysqli;
}

//возвращает результат запроса в виде одной строки
function getStringResult($query)
{
    $result = ConnectBd()->query($query);
    $result->data_seek(0);
    return $result->fetch_row()[0];
}

function genId($table)
{
    $result = 0;
    $items = getResultItems("SELECT * FROM `" . $table . "`");
    for ($i = 0; $i < $items->num_rows; $i++) {
        $items->data_seek($i);
        $row = $items->fetch_row();
        if ($row[0] > $result) {
            $result = $row[0];
        }
    }
    $result++;
    return $result;
}

function CheckAuth()
{
    if ($_COOKIE["login"] != "")
        if (getStringResult("SELECT password FROM `users` WHERE `login` ='" . $_COOKIE["login"] . "'") == $_COOKIE["pass"]) {
            return true;
        }

    header('Location: http://localhost/achiev/auth.php');
}

function getNameById($id)
{
    return getStringResult("SELECT name FROM `achievements` WHERE `id`='" . $id . "'");
}

function sendQuery($query)
{
    return ConnectBd()->query($query);
}

//получение id пользователя через его логин
function getIdByLogin($login)
{
    return getStringResult("SELECT id FROM `users` WHERE `login`='" . $login . "'");
}

//проверка на русский язык
function isRussianLang($str)
{
    for ($i = 0; $i < strlen($str); $i++) {
        if (ord($str[$i]) >= ord('а') && ord($str[$i]) <= ord('я'))
            return true;
    }
    return false;
}

function isRepeatLogin($login)
{
    $result = sendQuery("SELECT * FROM `users` WHERE `login`='" . $login . "'");
    if ($result->num_rows != 0)
        return true;
    else
        return false;
}

function currentPage()
{
    $page = $_SERVER['PHP_SELF'];
    $array_page = parse_url($page);
    $page = $array_page['path'];
    $page = substr($page, strripos($page, "/") + 1);
    return $page;
}