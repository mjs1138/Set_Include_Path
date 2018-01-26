<?php
// include 'One.php'; // This causes missing class since include path not set

$priorIncludePath = set_include_path("Level_1");
echo('Include Path is: ' . get_include_path()  . "\n");
echo('Prior Include Path was: ' . $priorIncludePath . "\n");

include 'two.php';