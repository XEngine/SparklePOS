<?php

class Product extends Eloquent {
	public static $timestamps = false;

	public function getCategory(){
		return $this->has_many_and_belongs_to("category",'map_product_category');
	}
	public function getImages()
	{
		return $this->has_many('image');
	}

}