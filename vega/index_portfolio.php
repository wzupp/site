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
$id1 = $_SESSION['user'];
$query = "SELECT fullname, career, about, interests FROM users WHERE id=".$id1;
$pxpgovno =mysqli_query($connect,$query);
var_dump($connect)
?>
<!--<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap&subset=cyrillic,cyrillic-ext"
        rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/for_vega/html_registr/potrfolio/CSS/style.css">
    <title>Вега портфолио</title>
</head>

<body class="body">
    <header class="header">
        <div class="container">
            <div class="Vega-up">
                <a href="/index.html"><img class="vega-u__foto" src="IMAGES/h-l.png" alt=""></a>
            </div>
            <div class="header__inner">
                <div class="Vega-up__a">
                    <p class="department">
                        Направление «Прикладная математика и информатика»<br />
                        Кафедра программного обеспечения систем радиоэлектронной аппаратуры
                        при АО «Концерн «Вега»
                      </p>
                </div>

                <nav class="Vega-up__nav">
                    <a class="vega-up__link" href="/for_vega/html_registr/main_str/index_main.php">Все портфолио</a>
                    <a class="vega-up__link" href="/for_vega/html_registr/reg_portfolio/index_regport.html">Редактировать</a>
                    <a class="vega-up__link" href="/for_vega/html_registr/vxod/logout.php">Выход</a>
                </nav>
            </div>
        </div>

    </header>

    <div class="intro">
        <div class="container">

            <div class="intro__inner">
                <div class="inro__foto">
                    <div id="rectangle">
                        <input class="intro__foto" type="file" name="upload_file" size="50">
                    </div>
                </div>
                <div class="intro__info1">
                    Фамилия, имя и отчество:
                    <br> 
                    </textarea>
                    <br>
                    <br><section>
                        <label class="select-label">Курс:</label> 
                        </section>  
                    <br>
                    <br><section>
                        <label class="select-label">Группа:</label>
                        </section>                        
                    <br>
                    О себе:
                    <br> 
                </div>

                <div class="intro__info2">
                    Карьера:
                    <br>
                    <br>
                    Интересы:
                    <br>
                </div>
            </div>
        </div>
    </div>

     <div class="works">
        <div class="container">

            <div class="works__nav">
                <a class="works__nav-link" href="#">Название</a>
                <a class="works__nav-link" href="#">Предмет</a>
                <a class="works__nav-link" href="#">Год</a>
                <a class="works__nav-link" href="#">Оценка</a>
            </div>

             Это изменить под вывод данных по проекту, который лежит в бд
            <div class="portfolio">
                <div class="portfolio__col">
                    <div class="work">
                        <div class="work__content">
                            <div class="work__cat">Предмет</div>
                            <div class="work__title">Название</div>
                            <time class="work__date" datetime="2019-11-22 19:00">2019</time>
                            <div class="work__wd">Оценка</div>
                            <form method=post title=»Скачать» style="padding-top: 0.7rem;">
                                <input type=button onclick=location.href=”moifail.zip”
                                name=»openFile» value=Скачать>
                                </form>
                        </div>
                    </div>
                </div>

                <div class="portfolio__col">
                    <div class="work">
                        <div class="work__content">
                            <div class="work__cat">Предмет</div>
                            <div class="work__title">Название</div>
                            <time class="work__date" datetime="2019-11-22 19:00">2019</time>
                            <div class="work__wd">Оценка</div>
                            <form method=post title=»Скачать» style="padding-top: 0.7rem;">
                                <input type=button onclick=location.href=”moifail.zip”
                                name=»openFile» value=Скачать>
                                </form>
                        </div>
                    </div>
                </div>

                <div class="portfolio__col">
                    <div class="work">
                        <div class="work__content">
                            <div class="work__cat">Предмет</div>
                            <div class="work__title">Название</div>
                            <time class="work__date" datetime="2019-11-22 19:00">2019</time>
                            <div class="work__wd">Оценка</div>
                            <form method=post title=»Скачать» style="padding-top: 0.7rem;">
                                <input type=button onclick=location.href=”moifail.zip”
                                name=»openFile» value=Скачать>
                                </form>
                        </div>
                    </div>
                </div>

                <div class="portfolio__col">
                    <div class="work">
                        <div class="work__content">
                            <div class="work__cat">Предмет</div>
                            <div class="work__title">Название</div>
                            <time class="work__date" datetime="2019-11-22 19:00">2019</time>
                            <div class="work__wd">Оценка</div>
                            <form method=post title=»Скачать» style="padding-top: 0.7rem;">
                                <input type=button onclick=location.href=”moifail.zip”
                                name=»openFile» value=Скачать>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="Vega__down">
        <img class="foto__down" src="IMAGES/f-l.png" alt="">
    </div>
    </div>
    </div>
</body>

</html>