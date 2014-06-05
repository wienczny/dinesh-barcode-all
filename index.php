<?php

require 'vendor/autoload.php';

$one = new Dinesh\BarcodeAll\DNS1D();
$one->setStorPath(getcwd());

echo $one->getBarcodeHTML("4445645656", "C39");
echo "<br />";
echo $one->getBarcodeHTML("4445645656", "C39+");