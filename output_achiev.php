<?php
//получаем все ачивки одного пользователя
$result = sendQuery("SELECT * FROM `achiev_link` WHERE `id_user`='" . getIdByLogin($_COOKIE["login"]) . "'");
for ($i = 0; $i < $result->num_rows; $i++) {
    $result->data_seek($i);
    $row = $result->fetch_row();?>

<<<<<<< Updated upstream
    <div>
<hr>
    Название: <?php echo getStringResult("SELECT name FROM `achievements` WHERE `id`='".$row[1]."'")?> <br>
    Фото: <img src="img/<?php echo $row[2];?>" width="100" height="100"><br>
    Описание: <?php echo $row[3];?>
<hr>
    </div>
=======

<div class="ach_all">
   <div class="name_achievk"> 
   <?php echo getStringResult("SELECT name FROM `achievements` WHERE `id`='".$row[1]."'")?> <br>
   </div>
   
   
     <img src="img/<?php echo $row[2];?>" width="100" height="100">
	 
	 
	 <div class="description">
     Описание: <?php echo $row[3];?>
     </div>
   
</div>

>>>>>>> Stashed changes
<?php
}
?>
