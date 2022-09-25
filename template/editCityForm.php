<?php

function editCityForm($city) {

?>
    <div>
        <form action="" method="post" autofocus>
            <div class="form">
                <h3>Форма редактирования города</h3>
                <span>Название:<input type="text" name="edit_text_city" required="" value="<?= $city['name'] ?>"></span>
                <span>Индекс Сортировки:<input type="text" name="edit_text_rangir" required="" value="<?= $city['index_sort'] ?>"></span>
                <input type="hidden" name="id" value="<?= $city['id'] ?>">
                <input type="submit" name="submit_edit_city" value="Подтвердить редактирование">
                <a href="">Отмена</a>
            </div>
        </form>
    </div>

  <?php
}
?>


