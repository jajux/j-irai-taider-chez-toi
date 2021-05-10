<?php 
     namespace App;

     class Cart{
 
    public $items = null;
    public $totalQty = 0;
    
    public function __construct($oldCart){
        if($oldCart){
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
        }
    }
 
     public function add($item, $services_id){
        $storedItem = ['qty' => 0, 'services_id' => 0, 'title_service' => $item->title_service,'item' =>$item];
         if($this->items){
            if(array_key_exists($services_id, $this->items)){
            $storedItem = $this->items[$services_id];
            }
         }
        $storedItem['qty']++;
        $storedItem['services_id'] = $services_id;
        $storedItem['title_service'] = $item->title_service;
        $this->totalQty++;
        $this->items[$services_id] = $storedItem;
    }
    }
?>