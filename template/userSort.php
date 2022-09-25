<?php

function userSort()
{
	?>
    <form action="" method="post">
        <div class="sortform">
            <div class="pole">
                <h3>Поле сортировки</h3>
                <span>
                            <input type="radio" name="sort_name" value="sort_id" checked="">
                            <b>id</b>
                        </span>
                <span>
                            <input type="radio" name="sort_name" value="sort_nm" checked="">
                            <b>Имя</b>
                        </span>
                <span>
                            <input type="radio" name="sort_name" value="sort_srnm" checked="">
                            <b>Фамилия</b>
                        </span>
                <span>
                            <input type="radio" name="sort_name" value="sort_st" checked="">
                            <b>Городу</b>
                        </span>
            </div>
            <div class="napr">
                <h3>Направление сортировки</h3>
                <span>
                            <input type="radio" name="sort_order_by_2" value="sort_asc" checked="">
                            <b>Возрастание</b>
                        </span>
                <span>
                            <input type="radio" name="sort_order_by_2" value="sort_desc">
                            <b>Убывание</b>
                        </span>
            </div>
            <input type="submit" name="submit_sort_names" value="Сортировать">
            <a href="">Отмена</a>
        </div>
    </form>
	<?php
}

?>

