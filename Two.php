<?php
echo('Include Path is: ' . get_include_path()  . "\n");
include 'Calculator.php';

$calc = new Calculator();
$ans = $calc->add(7,5);
echo ('From Two: ' . $ans . "\n");