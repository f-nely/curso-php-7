<?php

$infoCompany = [
    'name'         => 'EspecializaTi',
    'founder'      => 'Carlos Ferreira',
    'year_current' => 2018,
];

$infoCompanyTwo = [
    'courses'       => ['PHP', 'Js', 'Vue Js', 'Laravel'],
    'total_courses' => 26,
];

//var_dump(array_keys($infoCompany));

//var_dump(array_values($infoCompany));

//echo count($infoCompany);

$infoCompany = array_merge($infoCompany, $infoCompanyTwo);
var_dump($infoCompany);