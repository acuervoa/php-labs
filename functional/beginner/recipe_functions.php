<?php

function combine($a, $b)
{
	$combinations = [];

	if (is_array($a)) {
		foreach ($a as $i) {
			$combinations = array_merge($combinations, combine($i, $b));
		}
	} else {
		foreach ($b as $i) {
			$combinations[] = $a . ' ' . $i;
		}
	}
	return $combinations;
}

function print_first($items, $count)
{
	for ($counter = 0; $counter < $count; $counter++) {
		echo "$counter. ${items[$counter]} \n";
	}
}