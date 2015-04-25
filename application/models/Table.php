<?php

class Table extends Eloquent {

	public function getbyCategory(){
		return $this->belongs_to('TableCategory','table_category_id');
	}
	
}