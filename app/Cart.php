<?php

namespace App;



class Cart 
{
     public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;


    public function __construct($oldCart){

    	if ($oldCart) {
    		$this->items = $oldCart->items;
    		$this->totalQty = $oldCart->totalQty;
    		$this->totalPrice = $oldCart->totalPrice;
    		
    	}
    }

    public function add($item, $id, $cant){
    	$storedItem = ['qty' => 0, 'price' => $item->precio, 'item' => $item];
    	if($this->items){
    		if (array_key_exists($id, $this->items)){
    			$storedItem = $this->items[$id];
    		}
    	}
    	$storedItem['qty'] =$storedItem['qty'] + $cant;
    	$storedItem['precio'] = $item['precio'] * $storedItem['qty'];
    	$this->items[$id] = $storedItem;
    	$this->totalQty = $this->totalQty + $cant;
    	$this->totalPrice += $item->precio * $cant;
    }
    
    public function removeItem($id){
    	
    	$this->totalQty -= $this->items[$id]['qty'];
    	$this->totalPrice -= $this->items[$id]['precio'];
    	unset($this->items[$id]);
    }
}
