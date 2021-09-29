<?php

require_once("partial_generator.php");

$concatenate = function ($a, $b, $c, $d) {
	return $a . $b . $c . $d;
};

echo $concatenate("what ", "is ", "your ", "name\n");

$wathis = partial($concatenate, "what ", "is ");

echo $wathis("happening ", "here\n");