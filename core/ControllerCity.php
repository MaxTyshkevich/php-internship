<?php
namespace core;
require_once '../classes/City.php';
use classes\City;

class ControllerCity
{
	private $modelCity;

	public function __construct()
	{
		$this->modelCity = new City();
	}

	public function createCity()
	{
		$nameCity = htmlspecialchars($_POST['instextcity']);
		$indexCity = htmlspecialchars($_POST['instextrangir']);

		$this->modelCity->addCity($nameCity, $indexCity);

		header("Location: " . $_SERVER['REQUEST_URI']);
	}

	public function editCity()
	{
		$id = htmlspecialchars($_POST['id']);
		$nameCity = htmlspecialchars($_POST['edit_text_city']);
		$indexCity = htmlspecialchars($_POST['edit_text_rangir']);
		$this->modelCity->updateCity($id, $nameCity, $indexCity);
		header("Location: " . $_SERVER['REQUEST_URI']);
	}

	public function sortCity()
	{
		$fieldSort = htmlspecialchars($_POST['sort_sity']);
		$sortTo = htmlspecialchars($_POST['sort_order_by']);


		$this->modelCity->setSortParam($fieldSort, $sortTo);
		header("Location: " . $_SERVER['REQUEST_URI']);
	}

	public function renderAllCities()
	{
		require_once '../template/itemCity.php';
		$allCities = $this->modelCity->getAllCity();
		itemCity($allCities);
	}

	public function renderEditCity()
	{
		require_once '../template/editCityForm.php';
		$id = htmlspecialchars($_POST['id']);
		$city = $this->modelCity->getCity($id);
		editCityForm($city);
	}

	public function renderAddCity()
	{
		require_once '../template/addCity.php';
		addCity();
	}

	public function renderAfterDelete()
	{

		$id = htmlspecialchars($_POST['id']);
		$this->modelCity->deleteCity($id);
		$this->renderAllCities();
	}

	public function renderSort()
	{
		require_once '../template/citySort.php';
		citySort();
	}


}