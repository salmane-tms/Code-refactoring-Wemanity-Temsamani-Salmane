<?php

require_once 'gilded_rose2.php';

echo "OMGHAI!\n";

// test 1 ---------------------------------------
$items = array(
    new Item('+5 Dexterity Vest', 10, 20),
    new Item('Aged Brie', 2, 0),
    new Item('Elixir of the Mongoose', 5, 7),
    new Item('Sulfuras', 0, 80),
    new Item('Sulfuras', -1, 80),
    new Item('Backstage passes', 15, 20),
    new	 Item('Backstage passes', 10, 49),
    new Item('Backstage passes', 5, 49),
    // this conjured item does not work properly yet
    new Item('Conjured Mana Cake', 3, 6)
);

$app = new GildedRose($items);
$days = 2;

for ($i = 0; $i < $days; $i++) {
    echo("-------- day $i -------- ");
	print("</br>");
    echo("name, sellIn, quality ");
	echo ("</br>");
    foreach ($items as $item) {
        echo $item . PHP_EOL;
    }
    echo PHP_EOL;
    $app->update_quality();
}

print (" </br> END test 1 </br>");
// end test 1 ------------------------------------------


// test 2 -------------------------------------------
$items2 = array(
    new Item('+5 Dexterity Vest', 10, 20),
    new Item('Aged Brie', 2, 0),
    new Item('Elixir of the Mongoose', 5, 7),
    new Item('Sulfuras', 0, 80),
    new Item('Sulfuras', -1, 80),
    new Item('Backstage passes', 15, 20),
    new Item('Backstage passes', 10, 49),
    new Item('Backstage passes', 5, 49),
    // this conjured item does not work properly yet
    new Item('Conjured Mana Cake', 3, 6)
);

$app2 = new GildedRose($items);
$days2 = 10;

for ($i = 0; $i < $days2; $i++) {
    echo("-------- day $i -------- ");
	print("</br>");
    echo("name, sellIn, quality ");
	echo ("</br>");
    foreach ($items2 as $item) {
        echo $item . PHP_EOL;
    }
    echo PHP_EOL;
    $app2->update_quality();
}

// end test 2 ----------------------------------------
print ("</br> END test 2 </br>");