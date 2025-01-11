<?php

require_once 'vendor/autoload.php';

use Phpml\Classification\SVC;

$classifier = new SVC();

$sizes = [
    [30], 
    [40],
    [60]
];

$labels = ['P', 'M', 'G'];

$classifier->train($sizes, $labels);
$size_code = $classifier->predict([39]);

print_r('Seu tamanho é: ' . $size_code);