<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class cart extends CI_Controller {

function index1(){
	
	
	$this->load->view('cart');
	
}


	function Products(){
		
		parent::Controller();
		
		//load the cart library
		//you can do this to your autoload.php
		$this->load->library('cart');
		$this->load->helper('url');
	}
	
	function index(){
		
		//pull the list of products from your database.
		
		$vars['pList'] = $this->productModel->getProducts();
		
		//pList should have your product details. (product id, description, price, product image, etc.)
		//load the view then pass the product data.
		
		$this->load->view('product_view', $vars);
	}
	
	function addToCart($productId) {
		
		//you need the details for the selected products to be added to your cart
		
		$item = $this->productModel->getProductById($productId);
		
		//$item variable must have the 4 required indexes necessary for inserting data to our cart.
		
		//sample
		
		/* $item =	array(
               'id'      => 'sku_123ABC',
               'qty'     => 1,
               'price'   => 99.99,
               'name'    => 'Monitor',
               'options' => array('Color' => 'Black')
            );
		*/
		
		//insert item to cart
		
		$this->cart->insert($item);
		
		//after a user click the add to cart button in our product page we could redirect him
		//back to our product page
		
		redirect('products');
		
		//but if you use ajax to add item to your cart maybe you could use an echo fucntion.
		
	}
}

