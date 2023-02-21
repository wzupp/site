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



function isUser($connect,$login,$password,$id) {
    
    $sql = "SELECT * FROM `users` WHERE login = '$login' and id = '$id' and password = '$password'";
    $result = mysqli_query($connect,$sql);
    $user = mysqli_fetch_assoc($result);

    if(!empty($user))
    {
        session_start(); 
		$_SESSION['auth'] = true;
    } else{
        return false;
    }
    
}



?>