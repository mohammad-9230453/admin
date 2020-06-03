<?php

namespace App;


class Cart
{
    public $items=[];
    public $totalPrice=0;
    public $totalQty=0;


public function __construct($oldCart)
{
    if($oldCart){
        $this->items = $oldCart->items;
        $this->totalPrice = $oldCart->totalPrice;
        $this->totalQty = $oldCart->totalQty;
    }
}
public function add($post){
    $id = $post->id;
    $storedItem=['qty'=>0 , 'price'=>$post->price , 'item'=>$post];
    if (array_key_exists($id , $this->items)){
        $storedItem = $this->items[$id];
    }
    $storedItem['qty']++;
    $storedItem['price']*=$storedItem['qty'];
    $this->items[$id] = $storedItem;
    $this->totalPrice+=$post->price;
    $this->totalQty++;
}

public function delete($id){
    if (array_key_exists($id , $this->items)){
        $this->totalQty--;
        $this->totalPrice-=$this->items[$id]['price'];
        $this->items[$id]['qty']--;
        $this->items[$id]['price']*=$this->items[$id]['qty'];
       if ($this->items[$id]['qty'] ==0){
        unset($this->items[$id]);
       }
    }
}

public function forget($id)
{
    if (array_key_exists($id, $this->items)) {
        $this->totalQty -= $this->items[$id]['qty'];
        $this->totalPrice -= $this->items[$id]['price'] * $this->items[$id]['qty'];
        unset($this->items[$id]);
    }
}
    public function number($id , $number){

    if (array_key_exists($id , $this->items)){

        $this->totalQty-=$this->items[$id]['qty'];
        $this->totalPrice-=$this->items[$id]['price'] / $this->items[$id]['qty'];
        $this->items[$id]['qty'] = $number;
        $this->items[$id]['price'] =$this->items[$id]['price'] * $this->items[$id]['qty'];
        $this->totalQty+=$number;
        $this->totalPrice+=$this->items[$id]['price'];}
        if ($number == 0) {
            unset($this->items[$id]);
        }
    }
}

