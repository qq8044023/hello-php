<?php
require_once "vendor/autoload.php";

$hello = new Rivsens\Demo\Hello();
echo $hello->hello();

echo "\n";
$hiGirl = new Rivsens\Demo\Hello('My Goddess');
echo $hiGirl->hello();
	