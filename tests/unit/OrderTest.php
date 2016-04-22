<?php

use App\Product;

use App\Order;

class OrderTest extends PHPUnit_Framework_TestCase{

	protected $order; 

	public function setUp(){
		$this->order = new Order;

		$product = new Product('Fallout 4', 59);
		$product2 = new Product('Kebab', 5);

		$this->order->add($product);
		$this->order->add($product2);
	}

	function testAnOrderConsistsOfProducts(){

		$this->assertCount(2, $this->order->products());
	}

	function testAnOrderCanDetermineTheTotalCostOfAllItsProducts(){
		$this->assertEquals(64, $this->order->total());
	}

}
