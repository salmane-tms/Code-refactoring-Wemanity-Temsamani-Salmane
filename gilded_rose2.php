<?php

class GildedRose {

    private $items;

    function __construct($items) {
        $this->items = $items;
    }

    function update_quality() {
        foreach ($this->items as $item) {
			if ($item->quality ==50 && ($item->name == "Aged Brie" || $items->name== "Backstage passes") ) {
				print("Item cannot have quality value more than 50 !");
			}elseif ($item->quality==0 && ($item->name != "Aged Brie" && $items->name!= "Backstage passes") ){
				print("Item cannot have quality value less than 0 !");
			}elseif($item->name == "Sulfuras"){
				print("Impossible to alter Sulfuras item");
			}else{
				switch($item->name){
					case "Aged Brie":
						$item->quality= $item->quality+1;
						$item->sell_in= $item->sell_in-1;
						break;
					case "Backstage passes":
						if ($item->sell_in <=10 && $item->sell_in> 5 ) {
							$item->sell_in= $item->sell_in-1;
							$item->quality=$item->quality+2;
						}elseif ($item->sell_in <=5 && $item->sell_in> 1){
							$item->sell_in= $item->sell_in-1;
							$item->quality=$item->quality+3;
						}elseif($item->sell_in ==1){
							$item->quality=0;
							$item->sell_in=0;
						}else {
							$item->quality= $item->quality+1;
							$item->sell_in= $item->sell_in-1;
						}
						break;
					default:
						$item->quality=$item->quality-1;
						$item->sell_in=$item->sell_in-1;
						break;
				}
			}
        }
    }
}

class Item {

    public $name;
    public $sell_in;
    public $quality;

    function __construct($name, $sell_in, $quality) {
        $this->name = $name;
        $this->sell_in = $sell_in;
        $this->quality = $quality;
    }

    public function __toString() {
        return "{$this->name}, {$this->sell_in}, {$this->quality}";
    }

}

