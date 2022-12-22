<?php

$content = file_get_contents('day6.txt');
$datastream = str_split($content); 
$marker = [];

// 1st part

/* foreach ($datastream as $key => $char) {

    $marker = [
        $char,
        $datastream[$key + 1],
        $datastream[$key + 2],
        $datastream[$key + 3]
    ];


    if (count(array_unique($marker)) === 4) {

        echo $key + 3 + 1;
        die;

    }

} */

// 2nd part

foreach ($datastream as $key => $char) {

    $marker = [
        $char,
        $datastream[$key + 1],
        $datastream[$key + 2],
        $datastream[$key + 3],
        $datastream[$key + 4],
        $datastream[$key + 5],
        $datastream[$key + 6],
        $datastream[$key + 7],
        $datastream[$key + 8],
        $datastream[$key + 9],
        $datastream[$key + 10],
        $datastream[$key + 11],
        $datastream[$key + 12],
        $datastream[$key + 13]
    ];

    if (count(array_unique($marker)) === 14) {

        echo $key + 13 + 1;
        die;

    }

}

