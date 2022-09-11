<?php

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/lavalamp.css">
    <link rel="stylesheet" href="/style.css">
    <title>Document</title>
</head>
<body>
<div id="wrap">
    <div id="topbg"></div>
    <div id="wrap2">
        <div id="topbar">
            <img style="float:left;margin:0 150px 0 20px;height:65px;" src="images/logo.svg" alt="logo">
            <h1 id="sitename"><a href="#">Тестовое задание</a> <span class="description"></span></h1>
        </div>
	    <?php  require_once ('includes/header.php');  ?>
        <div id="content">
            <div id="left">
                <div class="post">
                    <div class="postheader"></div>
                    <div class="postcontent">
                        <h2>Общее количество загрузок страницы = <b>4</b></h2>
                    </div>
                    <div class="postbottom">
                        <h3 style=" margin-left: 25px; ">Вы посещали эту страницу <b>
                                1 </b> раз</h3>
                    </div>
                </div>
                <div class="post">
                    <div class="postheader"></div>
                    <div class="postcontent">
                        <h2>Список городов</h2>


                        <!--вывод таблицы Города-->


                        <form action="" method="post">
                            <div class="form flrig">
                                <input type="submit" name="ins" value="Добавить">
                                <input type="submit" name="sort" value="Сортировать">

                            </div>
                        </form>

                        <div class="cpsity">
                            <h3>Гродно</h3>
                            <span>
                        <form action="" method="post">
                            <input type="hidden" name="id" value="30">
                            <input type="submit" name="del_fors_city"
                                   onclick="return confirm('Вы действительно хотите удалить город?')" value="Удалить">
                        </form>
                    </span>
                            <span>
                        <form action="" method="post">
                            <input type="hidden" name="id" value="30">
                            <input type="submit" name="edit_fors_city" value="Редактировать">
                        </form>
                    </span>
                        </div>
                        <div class="cpsity">
                            <h3>Минск</h3>
                            <span>
                        <form action="" method="post">
                            <input type="hidden" name="id" value="36">
                            <input type="submit" name="del_fors_city"
                                   onclick="return confirm('Вы действительно хотите удалить город?')" value="Удалить">
                        </form>
                    </span>
                            <span>
                        <form action="" method="post">
                            <input type="hidden" name="id" value="36">
                            <input type="submit" name="edit_fors_city" value="Редактировать">
                        </form>
                    </span>
                        </div>
                        <div class="cpsity">
                            <h3>Варшава</h3>
                            <span>
                        <form action="" method="post">
                            <input type="hidden" name="id" value="40">
                            <input type="submit" name="del_fors_city"
                                   onclick="return confirm('Вы действительно хотите удалить город?')" value="Удалить">
                        </form>
                    </span>
                            <span>
                        <form action="" method="post">
                            <input type="hidden" name="id" value="40">
                            <input type="submit" name="edit_fors_city" value="Редактировать">
                        </form>
                    </span>
                        </div>
                        <div class="cpsity">
                            <h3>Горки</h3>
                            <span>
                        <form action="" method="post">
                            <input type="hidden" name="id" value="42">
                            <input type="submit" name="del_fors_city"
                                   onclick="return confirm('Вы действительно хотите удалить город?')" value="Удалить">
                        </form>
                    </span>
                            <span>
                        <form action="" method="post">
                            <input type="hidden" name="id" value="42">
                            <input type="submit" name="edit_fors_city" value="Редактировать">
                        </form>
                    </span>
                        </div>
                        <div class="cpsity">
                            <h3>Лепель</h3>
                            <span>
                        <form action="" method="post">
                            <input type="hidden" name="id" value="43">
                            <input type="submit" name="del_fors_city"
                                   onclick="return confirm('Вы действительно хотите удалить город?')" value="Удалить">
                        </form>
                    </span>
                            <span>
                        <form action="" method="post">
                            <input type="hidden" name="id" value="43">
                            <input type="submit" name="edit_fors_city" value="Редактировать">
                        </form>
                    </span>
                        </div>
                        <div class="cpsity">
                            <h3>234</h3>
                            <span>
                        <form action="" method="post">
                            <input type="hidden" name="id" value="45">
                            <input type="submit" name="del_fors_city"
                                   onclick="return confirm('Вы действительно хотите удалить город?')" value="Удалить">
                        </form>
                    </span>
                            <span>
                        <form action="" method="post">
                            <input type="hidden" name="id" value="45">
                            <input type="submit" name="edit_fors_city" value="Редактировать">
                        </form>
                    </span>
                        </div>
                    </div>
                    <div class="postbottom">
                    </div>
                </div>
            </div>
            <?php
                require_once ('includes/sidebar.php');
            ?>
            <div class="clear"></div>
        </div>
        <div id="footer">
            <div class="credit">Webcompany 2022г</div>
        </div>
    </div>
    <div id="btmbg"></div>
</div>
</body>
</html>
