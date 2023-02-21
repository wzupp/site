<?php
session_start();
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

if (isset($_POST['login']) && isset($_POST['password'])) {
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    if ($password === $password_confirm) {

        $query = "INSERT INTO users (login, password, email ) VALUES ('$login','$password', '$email' )";
        $result = mysqli_query($connect, $query);
        if ($result) {
            $smsg = "Регистрация прошла успешно";
        } else {
            $fsmsg = "Ошибка";
        }
    } else {
        $fsmsg = 'Ошибка';
    }
}
?>
<?php if (!empty($smsg)) { 
    header('Location: /for_vega/html_registr/reg_portfolio/index_regport.php');
    
} ?>
<div class="container">
    <form class="form-signin" method="POST">
        <h2>Регистрация</h2>
        <?php if(isset($smsg)){ ?> <div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div> <?php }?>
        <?php if(isset($fsmsg)){ ?> <div class="alert alert-danger" role="alert"> <?php echo $fsmsg; ?> </div> <?php }?>
        <input type="text" name="login" class="form-control" placeholder="Логин" required>
        <input type="email" name="email" class="form-control" placeholder="Email" required>
        <input type="password" name="password" class="form-control" placeholder="Пароль" required>
        <input type="password" name="password_confirm" class="form-control" placeholder="Потвердите пароль" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Регистрация</button>
        <a href="index.php" class="btn btn-lg btn-primary btn-block">Вход</a>
    </form>
</div>
</body>
</html>