<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Тестовое задание Webcompany</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="../style/style.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="js/jquery-1.1.3.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.min.js"></script>
    <script type="text/javascript" src="js/jquery.lavalamp.min.js"></script>
    <script type="text/javascript">
        $(function () {
            $("#1, #2, #3").lavaLamp({
                fx: "backout",
                speed: 700,
                click: function (event, menuItem) {
                    return true;
                }
            });
        });
    </script>
    <link href="../style/lavalamp.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="wrap">
    <div id="topbg"></div>
    <div id="wrap2">
        <div id="topbar">
            <img style="float:left;margin:0 150px 0 20px;height:65px;" src="../images/logo.svg" alt="logo">
            <h1 id="sitename"><a href="#">Тестовое задание</a> <span class="description"></span></h1>
        </div>
        <div id="header">
            <div id="headercontent"></div>
            <div id="topnav">
                <ul class="lavaLampWithImage" id="1">
                    <li><a href="city.php">Города</a></li>
                    <li class="current"><a href="users.php">Пользователи</a></li>
                    <li><a href="search.php">Поиск</a></li>
                    <li class="back" style="left: 87px; width: 124px;">
                        <div class="left"></div>
                    </li>
                </ul>
            </div>
        </div>
        <div id="content">
            <div id="left">
                <?php require_once '../template/post.countVisit.php'?>
                <div class="post">
                    <div class="postheader"></div>
                    <div class="postcontent">
                        <h2>Список Пользователей</h2>
                        <p><a name="top"></a></p>
                        <!--Сортирвка-->
                        <h3><a href="#down">Вниз</a></h3>
                        <div style="display:inline-block">
                            <form action="" method="post">
                                <input type="submit" name="ins2" value="Добавить">
                                <input type="submit" name="sort2" value="Сортировать">
                            </form>
                        </div>
                        <!--Создадим выпадающий список "Города"-->
                        <div class="filter">
                            <form action="" method="post">
                                <h3>Фильтр по Городам</h3>
                                <select size="1" name="selsity_2">
                                    <option disabled="">Выберите город</option>
                                    <option value="36">Минск</option>
                                    <option value="40">Варшава</option>
                                    <option value="43">Лепель</option>
                                    <option value="48">Москва</option>
                                    <option value="49">Уссурийск</option>
                                    <option value="50">ddddrr</option>
                                </select>
                                <input type="submit" name="sort_fc" onclick="hhh()" value="Показать">
                            </form>
                        </div>

                        <?php require_once '../template/itemUser.php' ?>

                        <a name="down"></a>
                        <h3><a href="#top">Наверх</a></h3></div>
                    <div class="postbottom">
                    </div>
                </div>
            </div>
            <div id="sidebar">
                <h3><b>Слева рабочая модель.</b></h3>
                <h3>Описание тестового задания</h3>
                <div class="zadanie">
                    <h4>Общее для всех страниц</h4>
                    <ul>
                        <ol>1 Общий счетчик на сайт</ol>
                        <ol>2 Счетчик на каждую страницу</ol>
                    </ul>
                    <h4>Страница города</h4>
                    <ul>
                        <ol>1 Вывод всех городов</ol>
                        <ol>2 Добавление</ol>
                        <ol>3 Удаление</ol>
                        <ol>4 Редактирование</ol>
                        <ol><b>5 Сортировка</b></ol>
                        <ol>5.1 Выбор направления</ol>
                        <ol>5.2 Выбор поля</ol>
                    </ul>
                    <h4>Страница Пользователи</h4>
                    <ul>
                        <ol>1 Вывод всех Пользователей</ol>
                        <ol>2 Добавление</ol>
                        <ol>3 Удаление</ol>
                        <ol>4 Редактирование</ol>
                        <ol><b>5 Сортировка</b></ol>
                        <ol>5.1 Выбор направления</ol>
                        <ol>5.2 Выбор поля</ol>
                        <ol>6 Фильтр по городам</ol>
                    </ul>
                    <h4>Страница Поиск</h4>
                    <ul>
                        <ol>1 Форма поиска</ol>
                        <ol>2 Поиск по фамилии</ol>
                        <ol>3 Поиск по имени</ol>
                        <ol>4 Вывод результатов</ol>
                    </ul>
                    <h3>Описание связей</h3>
                    <p>
                        Если изменяем название города Орша На Орша1
                        то у всех пользователей которые были выбрали Орша
                        Станет так-же Орша1 и во всех списках выбора города будет уже Орша1
                    </p>
                    <h3>Требование при выполнении</h3>
                    <p>
                    </p><h4>Не использовать фреймворки!!!</h4>
                    <h4>Использовать разбитие кода на функции</h4>
                    <h4>Понятные названия переменных</h4>
                    <h4>Язык прогроммирования серверной части PHP</h4>
                    <h4>Использование $_COOKIE для счетчиков</h4>
                    <p></p>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div id="footer">
            <div class="credit">Webcompany 2022г</div>
        </div>
    </div>
    <div id="btmbg"></div>
</div>

<script src="../js/shovisit.js" defer></script>
</body>
</html>