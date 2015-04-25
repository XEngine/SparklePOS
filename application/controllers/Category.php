<?php

class Category_Controller extends Base_Controller {
	public $restful = true;
	
	public function get_index($category_id)
	{
		$tables = Table::where('table_category_id','=',$category_id)->get();
		
		return View::make('table.index')->with('tables',$tables);
	}

}