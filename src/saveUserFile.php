<?php
require_once './db.php';

require_once '../vendor/autoload.php';
use \PhpOffice\PhpSpreadsheet\IOFactory;

if ($_SERVER['HTTP_REFERER'] != null) {
	header("Location: ".$_SERVER['HTTP_REFERER']);
}

if ($_FILES && $_FILES["file"]["error"] === UPLOAD_ERR_OK) {

	try{
		$file = $_FILES['file']['tmp_name'];

		$spreadsheet = IOFactory::load($file);
		$sheetData = $spreadsheet->getActiveSheet()->toArray();
	}catch (err) {
		// тут нужно обработать ошибку
	}

	if (!empty($sheetData)) {
		for ($i = 1; $i < count($sheetData); $i++) {

			$name = $sheetData[$i][0];
			$price = $sheetData[$i][1];
			$trade_price =  $sheetData[$i][2];
			$stock_1 = $sheetData[$i][3];
			$stock_2 =  $sheetData[$i][4];
			$producing_country = $sheetData[$i][5];

			var_dump($price);
			print_r('string stop :' . $i);
			$sendResult = mysqli_query($db, "INSERT INTO `test` (`id`, `name`, `price`, `trade_price`, `stock_1`, `stock_2`, `producing_country`) VALUES (NULL, '$name', '$price', '$trade_price', '$stock_1', '$stock_2', '$producing_country')");
			if (!$sendResult) {
				break;
				echo 'Файл не загружен проверте таблицу!';
			}
		}


	}


}

?>