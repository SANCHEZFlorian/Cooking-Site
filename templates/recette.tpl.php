<?php
/*
apéro
entrée 
plat
dessert
*/

$Apéritif = [
    'Saussion Brioché' => [
        'Information' => [
            'Température' => '170°C à 180°C',
            'Temps de cuisson' => '30 minutes',
            'Temps total' => '1h30 à 2h30'
        ],
        'Ingrédient' => [
            'Farine' => '250gr',
            'Oeufs' => '2',
            'Beurre' => '100gr',
            'Levure Boulangère' => '10gr',
            'Lait Tiède' => '1/2 tasse de thé'
        ],
        'Étape' => [
            '1' => 'Délayer levure et lait tiède.',
            '2' => 'Mélanger la farine, les oeufs, le beurre et la levure.',
            '3' => 'Bien travailler la pâte et laisser lever 1h à 2h.',
            '4' => 'Glisser la saucisse sans la peau et laisser lever', 
            '5' => 'Dorer à l\'oeuf',
            '6' => 'Enfourner 30 minutes entre 170°C et 180°C'          
        ]
    ]
];

$Entrée = [
    'Beurre d\'escargot' => [
        'Information' => [ 
            'Portion' => 'Pour environ 8 douzaines',
        ],
        'Ingrédient' => [
            'Beurre' => '250gr',
            'Échalotte' => '10gr',
            'Ail' => '20gr',
            'Persil' => '30gr',
            'Crème d\'anchois' => '3 cuillières à café',
            'Poivre',
            'Sel'
        ]

    ]
];

$Dessert = [
    'Tarte au Potiron' => [
        'Information' => [
            'Portion' => 'Pour 6 personnes',
            'Température' => '210°C',
            'Temps de cuisson' => '20 à 25 minutes',
            'Temps total' => '1 heure'
        ],
        'Ingrédient' => [

        ]
    ]
        ];

echo $Dessert;