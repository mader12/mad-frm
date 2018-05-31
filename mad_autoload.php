<?php
$autoload_real = __DIR__ . '/../../composer/autoload_real.php';
require($autoload_real);

var_dump($a);

$included = get_included_files();

foreach ($included as $i) {
    echo $i . PHP_EOL;
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

