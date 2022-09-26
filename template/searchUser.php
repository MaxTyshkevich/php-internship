<?php

function searchUser($users , $allCity)
{
	foreach ($users as $user) {
			$result = array_filter($allCity, function ($e) use ($user) {
				$cityID = $user['city_id'];
				return $e['id'] == $cityID;
			});

			$name = array_values($result)[0]['name'];

		?>
      <div class="users">
          <img width="100" src="/pictures/<?= $user['avatar'] ?>" class="image" alt="Фотография">
          <div class="userdan">
              <h4><?= $user['name'] . ' ' . $user['surname'] ?></h4>
              <p>Город: <?= $name?></p>
          </div>
      </div>
		<?php
	}

}

?>