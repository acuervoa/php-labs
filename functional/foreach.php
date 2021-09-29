<?php

require('shopping_list1.php'); # shopping_list2.php get us an error.

$total = 0;

foreach ($shopping as $group) {
	foreach ($group as $food => $count) {
		$total += $count;
	}
}

echo "Total items to purchase :  $total\n";