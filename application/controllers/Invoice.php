<?php

class Invoice_Controller extends Base_Controller {
	public $restful = true;
	
	public function get_index($table_id)
	{
		$Table = Table::where('table_slug','=',$table_id)->first();
		$tableState = $Table->table_active;

		if($tableState){
			$Invoice = Invoice::where('table_id','=',$Table->id)->where('active','=',1)->first();
			$invoiceDecode = json_decode($Invoice->products);
			$Totale = 0;
			for ($i = 0;$i < count($invoiceDecode);$i++)
			{
				$product = Product::where('id','=',$invoiceDecode[$i]->product)->first();

				$invoiceDecode[$i]->prize = $product->price;
				$invoiceDecode[$i]->total_qty_prize = $product->price * $invoiceDecode[$i]->quantity;
				$invoiceDecode[$i]->product = $product->product;
				$Totale = $Totale + $invoiceDecode[$i]->total_qty_prize;
			}

			$Category = Category::with('getDescriptions')
						->where('top','=','1')
						->get();
			
			return View::make('invoice.busy')->with('total',$Totale)->with('table',$Table)->with("inv",$invoiceDecode)->with('invoice',$Invoice)->with('category',$Category);
		}

		

		return View::make('invoice.index');
	}


}