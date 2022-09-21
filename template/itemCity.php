<?php

require_once '../classes/Db.php';
require_once '../classes/City.php';

use classes\City;

$cityInstance = new City();
$result = $cityInstance->getAllCity();

foreach ($result as $city) {
	?>
    <div class="cpsity">
        <h3><?= $city['name'] ?></h3>
        <span>
        <form action="../ajax/action.city.php" method="post">
            <input type="hidden" name="id" value="<?= $city['id'] ?>">
            <input type="submit" name="del_fors_city"
                   onclick="return confirm('Вы действительно хотите удалить город?')" value="Удалить">
        </form>
    </span>
        <span>
        <form action="../ajax/action.city.php" method="post">
            <input type="hidden" name="id" value="<?= $city['id'] ?>">
            <input type="submit" name="edit_fors_city" value="Редактировать">
        </form>
    </span>
    </div>

	<?php
}
?>


