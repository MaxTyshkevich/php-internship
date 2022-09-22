<?php

require_once '../classes/User.php';

use classes\User;

$userInstance = new User();
$result = $userInstance->getAllUser();

foreach ($result as $user) {
	?>
    <div class="users">
        <img width="100" src="/pictures/1347813178_40525625_pamyatka-zakazchiku.jpg" class="image"
             alt="Фотография">
        <div class="userdan">
            <h4><?= $user['surname'] .' '. $user['name']?></h4>
            <p>Город: </p>


            <form action="../ajax/action.user.php" method="post">
                <input type="hidden" name="id" value="<?=$user['id']?>">
                <input type="submit" name="del_fors_names" value="Удалить"
                       onclick="return confirm('Вы действительно хотите удалить пользователя?')">
            </form>

            <form action="" method="post">
                <input type="hidden" name="id15" value="54">
                <input type="submit" name="edit_fors_names" value="Редактировать">
            </form>
        </div>
    </div>

	<?php
}
?>


