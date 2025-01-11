<?php 

require 'vendor/autoload.php';

use Phpml\Regression\LeastSquares;

$salles_days = [
    [1], [4], [5], [6], [7]
];

$salles_quant = [
    [230], [234], [452], [123], [823]
];

$least_squares = new LeastSquares();
$least_squares->train($salles_days, $salles_quant);

$predict = $least_squares->predict([8]);
print_r('Quantidade de vendas estimada para o dia 8: ' . $predict);
