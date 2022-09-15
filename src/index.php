


<?php
require_once './getTable.php';

global $data_result , $max_price_result , $min_price_result;
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
<div class="wrapper">
    <form method="post" enctype="multipart/form-data" class="form" action="saveUserFile.php">
        <div class="form-group">
            <label for="exampleInputFile">File Upload:</label>
            <input type="file" name="file" class="form-control" id="exampleInputFile">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>

	<?php if (count($data_result) !== 0): ?>
      <table>
          <thead>
          <tr>
              <th>Наименование товара</th>
              <th>Стоимость</th>
              <th>Оптовая стоимость</th>
              <th>Наличие на складе 1, шт</th>
              <th>Наличие на складе 2, шт</th>
              <th>Страна производитель</th>
              <th>Примечание</th>
          </tr>
          </thead>
          <tbody>
					<?php
					$counts_all_goods = 0;
					$all_sum_price = 0;
					$all_sum_trade_price = 0;


					foreach ($data_result as $key => $rows) {
						$name = $rows['name'];
						$price = $rows['price'];


						$trade_price = $rows['trade_price'];
						$stock_1 = $rows['stock_1'];
						$stock_2 = $rows['stock_2'];
						$producing_country = $rows['producing_country'];

						$counts_all_goods += $stock_1 + $stock_2;
						$all_sum_price += $price;
						$all_sum_trade_price += $trade_price;

						$priceClassMax = $price === $max_price_result['max_price'] ? "max_price" : "";
						$priceClassMin = $trade_price === $min_price_result['min_price'] ? "min_price" : "";
						$remark = ($stock_1 < 20 || $stock_2 < 20) ? 'Осталось мало!! Срочно докупите!!!' : '';
						?>
              <tr>
                  <td><?= $name ?></td>
                  <td class="<?= $priceClassMax ?>"><?= $price ?></td>
                  <td class="<?= $priceClassMin ?>"><?= $trade_price ?></td>
                  <td><?= $stock_1 ?></td>
                  <td><?= $stock_2 ?></td>
                  <td><?= $producing_country ?></td>
                  <td><?= $remark?></td>
              </tr>
						<?php
					}
					?>


          </tbody>
      </table>
      <div class='goods-info'>
          <div class='goods-info__row row'>
              <div class='row__title'>общее количество товаров:</div>
              <span class='row__result'><?= $counts_all_goods ?>, шт</span></div>
          <div class='goods-info__row row'>
              <div class='row__title'>средняя стоимость розничной цены:</div>
              <span class='row__result'><?= round($all_sum_price / $counts_all_goods, 2) ?> ₽</span></div>
          <div class='goods-info__row row'>
              <div class='row__title'>средняя стоимость оптовой цены:</div>
              <span class='row__result'><?= round($all_sum_trade_price / $counts_all_goods, 2) ?> ₽</span></div>
      </div>
	<?php endif ?>
</div>
</body>
</html>