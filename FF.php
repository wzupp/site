<?php
$server = "127.0.0.1";
$login = "root";
$pass = "";
$name_db = "for_vega";

$connect = mysqli_connect($server, $login, $pass, $name_db);

if ($connect == false) {
    echo "ERR_NETWORK_CHANGED";
}
mysqli_query($connect, 'SET NAMES utf8');

$quantity=5;
$limit=150;
$page = $_GET['page'];

if(!is_numeric($page)) $page=1;
if ($page<1) $page=1;
$result2 = mysqli_query($connect,"SELECT `fullname`,`about`,`interests`,  `career`  FROM `vega_port`");
$num = mysqli_num_rows($result2);
$pages = $num/$quantity;
$pages = ceil($pages);
$pages++; 
if ($page>$pages) $page = 1; 
if (!isset($list)) $list=0;
$list=--$page*$quantity;
$result = mysqli_query($connect, "SELECT `fullname`, `about`, `interests`, `career` FROM `vega_port` LIMIT ".$quantity."  OFFSET ".$list);
$num_result = mysqli_num_rows($result);
for ($g=0; $g < $quantity*($page-1); $g++){
    $dedinside = mysqli_fetch_assoc($result);
}
for ($i = 0; $i<$quantity; $i++) {
    $row = mysqli_fetch_array($result);
    echo '<div><strong>' . $row['fullname'] . '</strong><br />' . 
    $row['interests'] . '</div><br>';
}

echo 'Страницы: ';

if ($page>=1) {
    echo '<a href="' . $_SERVER['SCRIPT_NAME'] . '?page=1"><<</a> &nbsp; ';
    echo '<a href="' . $_SERVER['SCRIPT_NAME'] . '?page=' . $page . 
    '">< </a> &nbsp; ';
}

$mod = $page+1;
$start = $mod-$limit;
$end = $mod+$limit;
for ($j = 1; $j<$pages; $j++) {
    if ($j>=$start && $j<=$end) {
        if ($j==($page+1)) echo '<a href="' . $_SERVER['SCRIPT_NAME'] . 
        '?page=' . $j . '"><strong style="color: #df0000">' . $j . 
        '</strong></a> &nbsp; ';
        else echo '<a href="' . $_SERVER['SCRIPT_NAME'] . '?page=' . 
        $j . '">' . $j . '</a> &nbsp; ';
    }
}

if ($j>$page && ($page+2)<$j) {
    echo '<a href="' . $_SERVER['SCRIPT_NAME'] . '?page=' . ($page+2) . 
    '"> ></a> &nbsp; ';
    echo '<a href="' . $_SERVER['SCRIPT_NAME'] . '?page=' . ($j-1) . 
    '">>></a> &nbsp; ';
}
?>