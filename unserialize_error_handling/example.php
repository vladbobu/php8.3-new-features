<?php

$serialized = 'invalid_serialized_data';

try {
    $result = unserialize($serialized);
} catch (UnserializationFailedException $e) {
    echo "Error during unserialization: " . $e->getMessage() . "\n";
}
