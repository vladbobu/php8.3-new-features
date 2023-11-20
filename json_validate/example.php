<?php

$json = '{"name": "John", "age": 30}';

if (json_validate($json)) {
    echo "Valid JSON.\n";
} else {
    echo "Invalid JSON.\n";
}
