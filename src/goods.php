<?php
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="wrapper">
    <section class='filter'>
        <form action="">
            <div class="filter__wrapper">
                <h3>Показать товары, у которых:</h3>
                <input type="hidden" name="userFilter" value="ok">
                <select name="prace" id="prace">
                    <option value="retail">Розничная цена
                    </option>
                    <option value="wholesale">Оптовая цена</option>
                </select>
                <div class="filter__range">

                    <div><label for="praceFrom">От:</label><input type="text" id='praceFrom' name="praceFrom"
                                                                  pattern="\d+"></div>
                    <div><label for="praceTo">До:</label><input type="text" id='praceTo' name="praceTo" pattern="\d+">
                    </div>
                </div>
                <div class="filter__stock">
                    <h3>На складе: </h3>
                    <select name="stockFilter" id="stockFilter">
                        <option value="more">более</option>
                        <option value="less">менее</option>
                    </select>
                    <div><input type="text" id='count' name="count" pattern="\d+"><label for="count">Штук</label></div>
                </div>
                <button type='submit'>Искать</button>
            </div>
        </form>
    </section>
    <section id="show">

        <section>
</div>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script>
    $(document).ready(function () {


        $('form').on('submit', function (event) {
            event.preventDefault();
            let data = $(this).serialize();
            console.log(data);
            $.ajax({
                type: 'POST',
                url: 'ajax.php',
                data: data,

                success: function (data) {
                    $('#show').html(data);
                }
            })
        })

    })


</script>
</body>
</html>
