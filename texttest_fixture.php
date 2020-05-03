<?php

require_once 'gilded_rose2.php';
$days = 2;
if (count($argv) > 1) {
    $days = (int) $argv[1];
}
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
	print("\n");
    echo("name, sellIn, quality ");
	echo ("\n");
    foreach ($items as $item) {
        echo $item . PHP_EOL;
    }
    echo PHP_EOL;
    $app->update_quality();
}

print ("END test 1 \n");
// end test 1 ------------------------------------------


// test 2 -------------------------------------------
$items2 = array(
    new Item('Backstage passes', 5, 49)
);

$app2 = new GildedRose($items2);
$days2 = 10;

for ($i = 0; $i < $days2; $i++) {
    echo("-------- day $i -------- ");
	print("\n");
    echo("name, sellIn, quality ");
	echo ("\n");
    foreach ($items2 as $item2) {
		echo "\n";
        echo $item2 . PHP_EOL;
		echo "\n";
    }
    echo PHP_EOL;
    $app2->update_quality();
}

// end test 2 ----------------------------------------
print ("\n END test 2 \n");