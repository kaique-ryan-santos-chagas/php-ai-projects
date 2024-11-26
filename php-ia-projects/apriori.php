<?php

require_once 'vendor\autoload.php';

use Phpml\Association\Apriori;

$associator = new Apriori();

$films = [
    ['Rambo', 'Adrenalina', 'John Wick'],
    ['Halloween', 'It a Coisa', 'A Forca'],
    ['Gente Grande', 'Esposa de Mentirinha', 'Máscara'],
    ['Como Nasce uma Estrela', 'A Espera de um milagre', 'Titanic']
];

$categories = ['Ação', 'Terror', 'Comédia', 'Drama'];

$associator->train($films, $categories);

$recommendations_prediction = $associator->predict(samples: [
    ['Halloween', 'A Forca'], 
    ['Rambo'], 
    ['Gente Grande', 'Máscara']
]);

$recommendations = [];

foreach($recommendations_prediction as $items) {
    foreach($items as $item){
        foreach($item as $recommendation){
            $exist = array_search($recommendation, $recommendations);
            if($exist === false)
                array_push($recommendations, $recommendation);
        }
    }
}


print_r($recommendations);