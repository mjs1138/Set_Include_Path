<?php
echo('Include Path is: ' . get_include_path()  . "\n");
include 'Calculator.php'; // when done before the setting of include_path in index.php generates a class not found error.

$calc = new Calculator();
$ans = $calc->add(7,5);
echo ('From One: ' . $ans . "\n");