<?php
$server = "127.0.0.1";
$login = "root";
$pass = "";
$name_db = "for_vega";

$connect = mysqli_connect($server, $login, $pass, $name_db);

if($connect == false)
{
    echo "ERR_NETWORK_CHANGED";
}

function isUser($connect,$login,$password) {
    
    $stmt = $connect->prepare( "SELECT * FROM `users` WHERE `login`=:login and `password`=:password");
    $stmt->bindValue(":login",$login, PDO::PARAM_STR);
    $stmt->bindValue(":password",$password, PDO::PARAM_STR);
    $stmt->execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if(!empty($row)){
        return true;
    } else{
        return false;
    }
}



?>