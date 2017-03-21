<?php
include "functions.php";
CheckAuth();
?>

<html>
<head>
    <title>Вывод неподтверждённых</title>
    <meta charset="UTF-8">
    <link href="main.css" rel="stylesheet">
</head>

<body class="body_style">
<div class="main_wrapper">
<!--    отображение шапки-->
    <?php include "head.php";?>

    <?php
    $result = sendQuery("SELECT * FROM `achiev_link` WHERE `status`= 'Не проверено'");
    for ($i = 0; $i < $result->num_rows; $i++) {
        $result->data_seek($i);
        $achiev = $result->fetch_row(); ?>

        <div class="achiev">
            <div class="ava_achiev"><img src="img/<?php echo $achiev[2] ?>" width="190" height="190"></div>
            <div class="head_achiev">
                <div class="login_main_block"><?php echo getStringResult("SELECT name FROM achiev.achievements WHERE `id`='" . $achiev[1] . "'") ?></div>
                <a href="delete_handler.php?id=<?php echo $achiev[0] ?>&from=<?php echo currentPage()?>"><img src="img/del.png" class="exit_icon"
                                                                              alt="Удалить"></a>
            </div>
            <div class="body_achiev">
                <div class="info_achiev"><?php echo $achiev[3] ?></div>
                <div class="date_achiev"><?php echo $achiev[6] ?></div>

                <form method="post" action="http://localhost/achiev/agree_handler.php?id=<?php echo $achiev[0] ?>">
                    <input type='submit' value="Подтвердить" class="button_unagree">
                </form>

            </div>
        </div>

        <?php
    }
    ?>

</div>

</body>
</html>