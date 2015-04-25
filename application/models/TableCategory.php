<?php

class TableCategory extends Eloquent {
	 public static $table = 'table_categories';

 	public function getbyCategory(){
		return $this->has_many('Table');
	}
	
}