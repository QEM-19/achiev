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

function getResultItems($query)
{
    $result = ConnectBd()->query($query);
    return $result;
}

function CheckAuth()
{
    if (!empty($_COOKIE)) {
        if (getStringResult("SELECT password FROM `users` WHERE `login` ='" . $_COOKIE["login"] . "'") == $_COOKIE["pass"]) {
            return true;
        }
    }
    header('Location: http://localhost/achiev/auth.html');
}

function getNameById($id){
    return getStringResult("SELECT name FROM `achievements` WHERE `id`='".$id."'");
}

function sendQuery($query)
{
    return ConnectBd()->query($query);
}