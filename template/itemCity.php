<?php

function itemCity($cites)
{
	?>
    <form action="" method="post">
        <div class="form flrig">
            <input type="submit" name="ins" value="Добавить">
            <input type="submit" name="sort" value="Сортировать">
        </div>
    </form>

	<?php
	foreach ($cites as $city) {
       // $name = ucfirst($city['name']);
       // print_r($name);
		?>
      <div class="cpsity">
          <h3><?= $city['name'] ?></h3>
          <span>
        <form action="" method="post">
            <input type="hidden" name="id" value="<?= $city['id'] ?>">
            <input type="submit" name="del_fors_city"
                   onclick="return confirm('Вы действительно хотите удалить город?')" value="Удалить">
        </form>
    </span>
          <span>
        <form action="" method="post">
            <input type="hidden" name="id" value="<?= $city['id'] ?>">
            <input type="submit" name="edit_fors_city" value="Редактировать">
        </form>
    </span>
      </div>

		<?php
	}

}

?>






