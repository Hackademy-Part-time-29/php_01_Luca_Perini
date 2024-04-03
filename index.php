<?php

//ESERCIZIO 1

$integer = 6;
$float = 6.5;
$string = "Mario";
$boolean = false;

var_dump($integer);
var_dump($float);
var_dump($string);
var_dump($boolean);

const INTEGER = 6;
const FLOAT = 6.5;
const STRING = "Mario";
const BOOLEAN = false;


//ESERCIZIO 2

$text = "Marco";
$text2 = "hai";
$text3 = "sete";
$text4 = "?";
$text5 = "Perchè";
$text6 = "$text2";
$text7 = "bevuto";
$text8 = "tutto";

echo "$text $text2 $text3 $text4 $text5 $text6 $text7 $text8.";

//ESERCIZIO 3

$words1 = [
    'una',
    67,
    'vita',
    'colle',
    'del',
    'di',
    'mi',
    'rosso',
  [
    'oscura',
    'era',
    89,
    [
    'mezzo',
    [
      'cammin',
      'Nel',
      [
        'selva',
        'la',
        [
          'via',
          'una',
          true,
        ]
      ],
    ]
  ],
      'ritrovai',
      'per'
    ],
  'diritta'
  ];
  $words2 = [
    'elemento1' => 25.89,
    'elemento2' => 'nostra',
    'elemento3' => [
      'Virgilio',
      'smarrita',
      'ché'
    ]
  ];

print_r($words1);
print_r($words2);

$results = $words1[8][3][1][1] . " " . $words1[8][3][0] . " " . $words1[4] . " " . $words1[8][3][1][0] . " " . $words1[5] . " " . $words2['elemento2'] . " " . $words1[2] . " " . $words1[6] . " " . $words1[8][4] . " " . $words1[8][5] . " " . $words1[8][3][1][2][2][1] . " " . $words1[8][3][1][2][0] . " " . $words1[8][0] . ", " . $words2['elemento3'][2] . " " . $words1[8][3][1][2][1] . " " . $words1[9] . " " . $words1[8][3][1][2][2][0] . " " . $words1[8][1] . " " . $words2['elemento3'][1] . ".";

echo $results;