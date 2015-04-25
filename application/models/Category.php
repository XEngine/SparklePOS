<?php

class Category extends Eloquent {
	public $includes = array('getDescriptions','getChildren','getChildren.getDescriptions');
	
	public function getDescriptions(){
		return $this->has_one('CategoryDescription');
	}
	public function getProducts(){
		return $this->has_many_and_belongs_to('Product','map_product_category');
	}
	public function getTopCat(){
		return $this->belongs_to('Category','parent_id');
	}
	public function getChildren(){
		return $this->has_many('Category','parent_id');
	}
}
