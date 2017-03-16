<?php
//получаем все ачивки одного пользователя
$result = sendQuery("SELECT * FROM `achiev_link` WHERE `id_user`='" . getIdByLogin($_COOKIE["login"]) . "'");
for ($i = 0; $i < $result->num_rows; $i++) {
    $result->data_seek($i);
    $row = $result->fetch_row();?>

<<<<<<< 0a9d4bed2da9487766836868182c672e965ea30c
=======
    <div>
>>>>>>> 6b8ae8f0714adda652240e31bd12ac6c7b578d18
<hr>
    Название: <?php echo getStringResult("SELECT name FROM `achievements` WHERE `id`='".$row[1]."'")?> <br>
    Фото: <img src="img/<?php echo $row[2];?>" width="100" height="100"><br>
    Описание: <?php echo $row[3];?>
<hr>
<<<<<<< 0a9d4bed2da9487766836868182c672e965ea30c
=======
    </div>
>>>>>>> 6b8ae8f0714adda652240e31bd12ac6c7b578d18
<?php
}
?>
