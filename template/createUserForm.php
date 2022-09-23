<?php

require_once '../classes/City.php';
use classes\City;

$cityInstance = new City();
$resultAllCity = $cityInstance->getAllCity();
?>


<form action="../ajax/action.createUser.php" method="post" enctype="multipart/form-data">
    <div class="form">
        <h3>Форма Добовления Пользователя</h3>
        <input type="text" name="ins_name" required placeholder="Имя">
        <input type="text" name="ins_surname" required placeholder="Фамилия">
        <span>город:
                        <select size="1" name="selsity">
                            <option disabled="">Выберите город</option>
                            <?php foreach ($resultAllCity as $city) {
	                            ?>
                                <option value="<?= $city['id'] ?>"><?= $city['name'] ?></option>
	                            <?php
                            }
                            ?>
                        </select>
        </span>
        <p>Выберите файл изображения</p>
        <input type="file" name="uploadfile">

        <input type="submit" name="subm_ins_names" value="Добавить">
        <a href="/?page=2">Отмена</a>
    </div>
</form>
