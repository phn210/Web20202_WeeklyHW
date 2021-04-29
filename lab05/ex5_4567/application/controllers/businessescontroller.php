<?php

class BusinessesController extends VanillaController {
	
	function beforeAction () {

	}

	function view($id = null) {
		$this->Business->id = $id;
		$this->Business->showHMABTM();
		$business = $this->Business->search();
		$this->set('business',$business);
	}

	function findBusiness($id = null){
		$this->Business->id = $id;
		$this->Business->showHMABTM();
		return $business = $this->Business->search();
	}
	
	/*
	function findBusinesses ($categoryId = null) {
		//$this->Business->where('category_id',$categoryId);
		//return $this->Business->search();
		$businessesId = $this->Business->custom('select * from '.'`biz_categories`'.' where '.'category_id = \''.$categoryId.'\'');
		foreach ($businessesId as $businessId):
			array_push($businesses, $this->findBusiness('\''. $businessId['biz_categories']['business_id'] .'\''));
		endforeach;
		return $businesses;

	}
	*/

	//function findBusinesses ($categoryId = null) {
		//$this->Business->where('category_id',$categoryId);
		//return $this->Business->search();
		

	//}

	function list($categoryId = null) {
		$this->Business->showHMABTM();
		$businesses = $this->Business->search();
		//$business = findBusinesses($categoryId);
		$categories = performAction('categories', 'findAllCategories', array($categoryId));
		$this->set('businesses',$businesses);
		$this->set('categories',$categories);
		$this->set('categoryId', $categoryId);
	}

	function add(){
		$this->Business->name = $_POST['name'];
		$this->Business->address = $_POST['address'];
		$this->Business->city = $_POST['city'];
		$this->Business->telephone = $_POST['telephone'];
		$this->Business->url = $_POST['url'];

		$this->set('name', $this->Business->name);
		$this->set('address', $this->Business->address);
		$this->set('city', $this->Business->city);
		$this->set('telephone', $this->Business->telephone);
		$this->set('url', $this->Business->url);

		$cats = $_POST['cats'];
		if($this->Business->add()){
			foreach ($cats as $cat):
				$this->Business->custom('INSERT INTO `biz_categories` VALUES(' . $this->Business->id . ',' . $cat['Category']['id']);
			endforeach;
		}
		$categories = performAction('categories', 'findAllCategories', array());
		$this->set('categories',$categories);
		
	}

	function register(){
		$categories = performAction('categories', 'findAllCategories', array());
		$this->set('categories',$categories);
	}

	function afterAction() {

	}
	

}