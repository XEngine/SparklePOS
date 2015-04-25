<?php

class Home_Controller extends Base_Controller {
	public $restful = true;
	
	public function get_index()
	{
		$tablecategory = TableCategory::all();
		$tables = Table::all();
		return View::make('home.index')->with('categories',$tablecategory)->with('tables',$tables);
	}
}