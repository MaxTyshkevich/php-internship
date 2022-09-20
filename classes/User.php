<?php
namespace classes;

require_once './Db.php';
use classes\Db;



class User extends Db
{
	private $dataUsers;

	public function getAllUser() {
			$sql = "SELECT * FROM `user`";

			$this->dataUsers = $this->connect->query($sql);

	}

	public function addNewUser() {

	}

	public function changeUser($id) {

	}

	public function removeUser($id) {

	}

	public function renderUser () {
		foreach ($this->dataUsers as $key => $user) {
			$template = '<div class="users">
                    <img width="100" src="/pictures/3921.jpg" class="image" alt="Фотография">
                    <div class="userdan">
                        <h4>' . $user['surname'] . ' ' .  $user['name'] . '</h4>
                        <p>Город:' . $user['city_id'] . '</p>


                        <form action="../ajax/action.user.php" method="post">
                            <input type="hidden" name="id" value="'.$user['id'] .'">
                            <input type="submit" name="del_fors_names" value="Удалить" onclick="return confirm('Вы действительно хотите удалить пользователя?')">
                        </form>

                        <form action="" method="post">
                            <input type="hidden" name="id15" value="44">
                            <input type="submit" name="edit_fors_names" value="Редактировать">
                        </form>
                    </div>
                </div>';
		}

// Array ( [id] => 1 [name] => Max [surname] => Tyshkevich [avatar] => [city_id] => 1 )
//		$template = '<div class="users">
//                    <img width="100" src="/pictures/3921.jpg" class="image" alt="Фотография">
//                    <div class="userdan">
//                        <h4>Михайлов Сергей</h4>
//                        <p>Город: </p>
//
//
//                        <form action="" method="post">
//                            <input type="hidden" name="id" value="44">
//                            <input type="submit" name="del_fors_names" value="Удалить" onclick="return confirm('Вы действительно хотите удалить пользователя?')">
//                        </form>
//
//                        <form action="" method="post">
//                            <input type="hidden" name="id15" value="44">
//                            <input type="submit" name="edit_fors_names" value="Редактировать">
//                        </form>
//                    </div>
//                </div>';

	}


}

$test = new User();
$test->getAllUser();
$test->renderUser();