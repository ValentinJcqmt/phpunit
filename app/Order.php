<?php 

namespace App;

use App\Product;

class Order{
	
	protected $products = [];

	public function add(Product $product){
		$this->products[] = $product;
	}

	public function products(){
		return $this->products;
	}

	public function total(){
		foreach ($product as $key => $value) {
			# code...
		}
	}

}