<?php

class CategoriesController extends VanillaController {
	
	function beforeAction () {

	}

	function viewall() {
		$this->Category->showHMABTM();
		$categories = $this->findAllCategories();
		$this->set('categories',$categories);
	}

	function findAllCategories() {
		return $this->Category->search();
	}

	function findCategories ($categoryId = null) {
		$this->Category->where('id',$categoryId);
		return $this->Categories->search();
	}

	function add() {
		$this->Category->id = $_POST['id'];
		$this->Category->title = $_POST['title'];
		$this->Category->description = $_POST['description'];
		$this->set('result', $this->Category->add());
	}

	function delete($categoryId) {
		$this->Category->id = $categoryId;
		$this->Category->delete();
	}

	function afterAction() {

	}


}