<?php

// Using the Randomizer class in PHP 8.3
$randomizer = new \Random\Randomizer();

// Example of getBytesFromString()
$randomString = $randomizer->getBytesFromString('abcdefghijklmnopqrstuvwxyz', 10);
echo "Random string: $randomString\n";

// Example of getFloat()
$randomFloat = $randomizer->getFloat(0, 1);
echo "Random float: $randomFloat\n";
