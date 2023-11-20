<?php

class MyClass {
    const CONSTANT1 = 'value1';
    const CONSTANT2 = 'value2';
}

// Dynamically accessing class constants
$constantName = 'CONSTANT1';
echo MyClass::{$constantName} . "\n";  // Outputs 'value1'

$constantName = 'CONSTANT2';
echo MyClass::{$constantName} . "\n";  // Outputs 'value2'

