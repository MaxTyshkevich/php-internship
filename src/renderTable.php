<?php

namespace render;

function renderTable ($date)
{


	$template = "<table>
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
          <tbody>";

	foreach ($date as $key => $rows) {
		$name = $rows['name'];
		$price = $rows['price'];


		$trade_price = $rows['trade_price'];
		$stock_1 = $rows['stock_1'];
		$stock_2 = $rows['stock_2'];
		$producing_country = $rows['producing_country'];

		$template .= "<tr>
                  <td>{$name}</td>
                  <td>{$price}</td>
	<td>{$trade_price}</td>
	<td>{$stock_1}</td>
	<td>{$stock_2}</td>
	<td>{$producing_country}</td>
	<td></td>
	</tr>";


	}
$template .= "</tbody></table>";

	return $template;
}




function renderCleantable () {
	return "<table>
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
          		<tr>
          		<td colspan='5'>Ничего не найдено!</td>
          		</tr>
					</tbody>";
}










