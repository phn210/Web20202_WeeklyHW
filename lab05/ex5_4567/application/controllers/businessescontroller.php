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

	function findBusinesses ($categoryId = null) {
		$this->Business->where('category_id',$categoryId);
		$this->Business->orderBy('name');
		return $this->Business->search();
		//return $this->Business->custom('select * from '.'`biz_categories`'.' where '.'category_id = \''.$categoryId.'\'');
	}

	function list($categoryId = 'ECO') {
		$this->Business->showHMABTM();
		//if($categoryId != null)
		$businesses = $this->findBusinesses($categoryId);
		//else $businesses = array();
		$categories = performAction('categories', 'findAllCategories', array($categoryId));
		$this->set('businesses',$businesses);
		$this->set('categories',$categories);
	}

	function new(){
		$this->Business->id = $_POST['id'];
		$this->Business->name = $_POST['name'];
		$this->Business->address = $_POST['address'];
		$this->Business->city = $_POST['city'];
		$this->Business->telephone = $_POST['telephone'];
		$this->Business->url = $_POST['url'];
		$this->Business->save();
	}

	function afterAction() {

	}
	

}