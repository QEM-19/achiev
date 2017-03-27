<?php

include "functions.php";
CheckAuth();
?>

<html>
<head>
    <title>The Diary Achievements</title>
    <meta charset="UTF-8">
    <link href="main.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script>
        function funcSuccess(data){
            alert("Соединение успешно");
        }
        function handler() {
            var nick = document.getElementById("nick");
            var desc = document.getElementById("desc");
            if (nick.value.length >= 3 && nick.value.length <= 20){
                var w_n = document.getElementById("warn_nick");
                w_n.innerHTML = ' ';
                if (desc.value.length >= 3 && desc.value.length <= 150){
                    var w_n = document.getElementById("warn_desc");
                    w_n.innerHTML = ' ';
                    $.ajax({
                        url: "change_handler.php",
                        type: "POST",
                        data: ({nickname:nick.value,description:desc.value}),
                        dataType: "html",
                        success: funcSuccess
                    });
                }
                else{
                    var w_n = document.getElementById("warn_desc");
                    w_n.innerHTML = 'Неверная длина Описания'
                }
            }
            else{
                var w_n = document.getElementById("warn_nick");
                w_n.innerHTML = 'Неверная длина Никнейма';
                if (desc.value.length >= 3 && desc.value.length <= 150){
                }
                else{
                    var w_n = document.getElementById("warn_desc");
                    w_n.innerHTML = 'Неверная длина Описания'
                }
            }
        }
    </script>
</head>

<body class="body_style"><?php include "head.php"; ?>

<div class="main_wrapper">

    <?php
    $result = ConnectBd()->query("SELECT * FROM `users` WHERE `id`='" . getIdByLogin($_COOKIE["login"]) . "'");
    $result->data_seek();
    $row = $result->fetch_row();
    ?>

    <div class="main_block">
        <div class="back_right_add">
            <script>add_php()</script>
            Никнейм: <input type="text" size="30" name="nickname" id="nick" value="<?php echo $row[1]; ?>"> <br>
            <div id="warn_nick">    </div>
            Описание: <textarea cols="40" rows="5" name="description" id="desc"><?php echo $row[2]; ?></textarea><br>
            <div id="warn_desc"></div><br>
            Фото: <input type="file" name="photo" id="idPhoto" accept="image/*"><br><br>
            <input type="button" value="Изменить" onclick="handler()";>
        </div>
    </div>
</div>

</body>
</html>
