<?php

class DoAjax_Controller extends Base_Controller {
	public $restful = true;
	
	public function post_eatables()
	{
		$Calls = Input::all();
		$CatBoolean = false;
		$getCategory = Category::where("id","=",$Calls['id'])->first();

			//Check our category has subcategories!
		if(isset($getCategory->getChildren)){
			//List our subs!
			$CatBoolean = true;
			return View::make('ajaxhandlers.eatablesSubListing')->with('categories',$getCategory->getChildren)->with('iscat',$CatBoolean);
		}
			//here we get products for selected category.
		$Products = Product::where('category_id','=',$Calls['id'])->get();
		return View::make('ajaxhandlers.eatablesSubListing')->with('products',$Products)->with('iscat',$CatBoolean);
	}
}