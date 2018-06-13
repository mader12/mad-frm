<?php

$autoload_real = __DIR__ . '/../../composer/autoload_real.php';
require($autoload_real);
$a = file_get_contents($autoload_real);
$a = explode('class', $a);

$a = explode('{', $a[1]);
$a = trim($a[0]);

if (class_exists($a)) {
    $a = new $a();
    $loader = $a::getLoader();
    //var_dump($a);
} else {
    echo 0;
}

$start = microtime(true);


/*
$included = get_declared_classes();

foreach ($included as $i) {
    echo $i . PHP_EOL;
}
*/

$included = get_declared_classes();
var_dump(count($included));
foreach ($included as $i=> $f) {
    
}

echo $i.PHP_EOL;

$finish = microtime(true);
$delta = $finish - $start;

echo($delta);


