<?php

function addCity() {
	?>
	<form action="" method="post" class="dopsity">
		<h3>Форма добовления города</h3>
		<input type="text" name="instextcity" required="" placeholder="Название города">
		<input type="text" name="instextrangir" required="" placeholder="Индекс Сортировки">
		<br>
		<input type="submit" value="Добавить" name="subminscity">
		<a href="">Отмена</a>
	</form>
	<?php
}
?>