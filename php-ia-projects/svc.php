<?php

require_once 'vendor/autoload.php';

use Phpml\Classification\SVC;

$classifier = new SVC();

$sizes = [
    [30, 40, 50],
    [60, 70, 80],
    [90, 100, 110]
];

$labels = ['P', 'M', 'G'];

$classifier->train($sizes, $labels);
$size_code = $classifier->predict([40, 50]);

print_r('Seu tamanho é: ' . $size_code);