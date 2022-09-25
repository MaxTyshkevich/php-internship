<?php

function editUser($allCity, $user)
{
    ?>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form">
            <h3>Форма Редактирования Пользователя</h3>
            <span>Имя <input type="text" name="edit_text_name" required="" value="<?= $user['name'] ?>"> </span>
            <span>Фамилия <input type="text" name="edit_text_surname" required=""
                                 value="<?= $user['surname'] ?>"> </span>
            <span>Город
                        <select size="1" name="edit_selsity">
                            <?php foreach ($allCity as $city) {
	                            $SelectedOption = $city['id'] === $user['city_id'] ? 'selected' : '';
	                            ?>
                                <option value="<?= $city['id'] ?>" <?= $SelectedOption ?> >
                                  <?= $city['name'] ?>
                                </option>

	                            <?php
                            }
                            ?>
                        </select>
        </span>
            <img width="100" src="/pictures/<?= $user['avatar'] ?>" class="image"
                 alt="Фотография">
            <input type="file" name="uploadfile">
            <input type="hidden" name="photo"
                   value="/pictures/<?= $user['avatar'] ?>">
            <input type="hidden" name="id_red" value="<?= $user['id'] ?>">
            <input type="submit" name="subm_edit_names" value="Подтвердить редактирование">
            <a href="">Отмена</a>
        </div>
    </form>

	<?php
}

?>



