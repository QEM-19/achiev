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

<body class="main_style">

<div class="head_logotip">
   
	<p><font size="15" color="blace" >The Diary Achievements</font></p>
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/core.css">
</div>

<body>

<?php
$result = ConnectBd()->query("SELECT * FROM users ORDER BY rate DESC");
for ($i = 0; $i < $result->num_rows; $i++) {
    $result->data_seek($i);
    $row = $result->fetch_row();
    echo $row[1] . " - " . $row[5] . "<br>";
}
?>


			<html lang="en">
			<head>
				<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
				<link rel="stylesheet" href="css/main.css">
			</head>
			<body>

			<a href="index.php" class="action-button shadow animate red">Back</a>
			</body>
			</html>

</body>
</html>

