<?php
session_start();
set_include_path ('/for_vega/html_registr/vxod/index.php');

$server = "127.0.0.1";
$login = "root";
$pass = "";
$name_db = "for_vega";
    
$connect = mysqli_connect($server, $login, $pass, $name_db);
    
if($connect == false)
{
    echo "ERR_NETWORK_CHANGED";
}

$id = $_SESSION['user'];

    $sql = "SELECT fullname, career, about, interests FROM vega_port WHERE id=".$id;
    $result = mysqli_query($connect,$sql);
    $endres = mysqli_fetch_assoc($result);

   

var_dump($endres['fullname']);

?>
<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8" />
  <title></title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>

<header>
    <?php
    print_r($endres['fullname']);
    ?>


</header>

<nav>Меню навигации</nav>

<aside>Боковая колонка SideBar</aside>

<article>
 Контент - основное содержимое страницы.
</article>

<footer>Подвал сайта</footer>
 
</body>
</html>
