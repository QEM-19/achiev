<?php
include "functions.php";
CheckAuth();
?>

<html>
<head>
    <title>Топ пользователей</title>
    <meta charset="UTF-8">
    <link href="main.css" rel="stylesheet">
</head>

<body class="body_style"><?php include "head.php"; ?>

<div class="main_wrapper">


    <!--    блок информации и пользователе  -->
    <div class="main_block main_block_correct">
        <?php
        $result = ConnectBd()->query("SELECT * FROM users ORDER BY rate DESC");
        for ($i = 0; $i < $result->num_rows; $i++) {
            $result->data_seek($i);
            $row = $result->fetch_row();
            ?>
            <a href="user.php?id=<?php echo $row[0]?>">
                <div class="item_top_user">
                    <img src="img/<?php echo $row[6] ?>" class="photo_item_user">
                    <div class="nick_item_user"><?php echo $row[1] ?></div>
                    <div class="rate rate_correct"><?php echo $row[5] ?></div>
                </div>
            </a>
            <?php
        }
        ?>
    </div>


</div>

</body>
</html>