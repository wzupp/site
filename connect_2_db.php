<?php

include "connect_2_db.php";
$result = mysqli_query($link,"SELECT * FROM `groups` ORDER BY `id` ASC");

while($groups = mysqli_fetch_assoc($result))
{
    echo $groups['title'];
    echo "<br>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf8">
    <meta name="viewport" content="width= device - width, initial - scale =1, shrink -to-fit=no">
    <title>Document</title>
    <link rel = "stylesheet" href="css/bootstrap.min.css">
    <link rel = "stylesheet" href="css/main.css">
</head>
<body>

    <!-- monjno udalit-->
    <div class="container">
        <h1>Privet <?php echo $login; ?></h1>
        <h2> ТЫ сonnected to DB - <?php echo $name_db; ?></h2>
    </div>
    <!-- mojno udalit-->
        <script src="js/jquery-3.3.1.min.js"></script>
        <script scr="js/bootstrap.min.js"></script>
</body>
</html>