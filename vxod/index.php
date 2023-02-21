<?php
session_start();

$server = "127.0.0.1";
$login = "root";
$pass = "";
$name_db = "for_vega";
    
$connect = mysqli_connect($server, $login, $pass, $name_db);
    
if($connect == false)
{
    echo "ERR_NETWORK_CHANGED";
}



mysqli_query($connect,'SET NAMES utf8');


    if(!empty($_REQUEST['login']) and !empty($_REQUEST['password'])){
        $login = $_REQUEST['login'];
        $password = $_REQUEST['password'];

        $sql = "SELECT * FROM `users` WHERE login = '$login' and password = '$password'";
        $result = mysqli_query($connect,$sql);
        $user = mysqli_fetch_assoc($result);

        if(!empty($user))
            {
		        $_SESSION['auth'] = true;
       
                $_SESSION['id'] = $user['id']; 
                $_SESSION['login'] = $user['login'];
             } else{
                $fsmg= "<h1>Пользователь не найден</h1>";
            } if(empty($fsmg)){
                header('Location: C:\Program Files (x86)\EasyPHP-Devserver-17\eds-www\vega\index_portfolio.php');
            }
    } 


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-widht, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <form class="form-signin" method="POST">
        <h2>Авторизация</h2>
        <input type="text" id="login" name="login" class="form-control" placeholder="Логин" required>
        <input type="password" id="password" name="password" class="form-control" placeholder="Пароль" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Войти</button>
        <a href="login.php" class="btn btn-lg btn-primary btn-block">Регистрация</a>
    </form>
</div>

</body>
</html>