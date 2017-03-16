<?php
include "functions.php";
CheckAuth();
?>

<html>
<head>
    <title>Топ пользователей</title>
    <link href="main.css" rel="stylesheet">
</head>
<body>

<?php
$result = ConnectBd()->query("SELECT * FROM users ORDER BY rate DESC");
for ($i = 0; $i < $result->num_rows; $i++) {
    $result->data_seek($i);
    $row = $result->fetch_row();
    echo $row[1] . " - " . $row[5] . "<br>";
}
?>

</body>
</html>

