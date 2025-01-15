<?php 

require_once 'vendor/autoload.php';

use Phpml\Clustering\KMeans;

$clustering = new KMeans(2, 2);

$samples = [
    [2, 3], [2, 4], [7, 10], [8, 9]
];

$result = $clustering->cluster($samples);
$result = json_encode($result);

print_r($result);