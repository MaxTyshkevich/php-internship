<?php

function itemUser($allUsers, $allCity)
{
	?>
    <div style="display:inline-block">
        <form action="" method="post">
            <input type="submit" name="ins2" value="Добавить">
            <input type="submit" name="sort2" value="Сортировать">
        </form>
    </div>
    <div class="filter">
        <form action="" method="post">
            <h3>Фильтр по Городам</h3>
            <select size="1" name="selsity_2">

		<?php foreach ($allCity as $city) {
		?>
                  <option value="<?=$city['id'] ?>"><?=$city['name'] ?></option>
		<?php
							}
        ?>
            </select>
            <input type="submit" name="sort_fc" onclick="hhh()" value="Показать">
        </form>
    </div>

	<?php
	foreach ($allUsers as $user) {

		?>
      <div class="users">
          <img width="100" src="/pictures/<?=$user['avatar']?>" class="image"
               alt="Фотография">
          <div class="userdan">
              <h4><?= $user['surname'] . ' ' . $user['name'] ?></h4>
              <p>Город: </p>


              <form action="" method="post">
                  <input type="hidden" name="id" value="<?= $user['id'] ?>">
                  <input type="submit" name="del_fors_names" value="Удалить"
                         onclick="return confirm('Вы действительно хотите удалить пользователя?')">
              </form>

              <form action="" method="post">
                  <input type="hidden" name="id" value="<?= $user['id'] ?>">
                  <input type="submit" name="edit_fors_names" value="Редактировать">
              </form>
          </div>
      </div>

		<?php
	}
}

?>





