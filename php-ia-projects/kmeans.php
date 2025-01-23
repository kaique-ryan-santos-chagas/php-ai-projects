<?php 

require_once 'vendor/autoload.php';

use Phpml\Clustering\KMeans;

$clustering = new KMeans(2, 2);

$samples = [
    [2, 3], [2, 4], [7, 10], [8, 9]
];

$clusters = $clustering->cluster($samples);
$clusters_organized = array();

foreach($clusters as $cluster){

    $cluster_organized = array();

    foreach($cluster as $data_array){
        foreach($data_array as $data){
            array_push($cluster_organized, $data);
        }
    }

    array_push($clusters_organized, $cluster_organized);
}

print_r($clusters_organized);