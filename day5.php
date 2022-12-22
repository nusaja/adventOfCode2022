<?php

$content = file_get_contents('day5.txt');

$crates = [
["F", "C", "J", "P", "H", "T", "W"],
["G", "R", "V", "F", "Z", "J", "B", "H"],
["H", "P", "T", "R"],
["Z", "S", "N", "P", "H", "T"],
["N", "V", "F", "Z", "H", "J", "C", "D"], 
["P", "M", "G", "F", "W", "D", "Z"],
["M", "V", "Z", "W", "S", "J", "D", "P"], 
["N", "D", "S"],
["D", "Z", "S", "F", "M"]
];


$separated = explode("\n\n", $content); 

$instructions = explode("\n", $separated[1]);

$onlyNums = [];

foreach ($instructions as $instruction) {

    $re = '/move ([0-9]+) from ([0-9]+) to ([0-9]+)/m';
    preg_match_all($re, $instruction, $matches, PREG_SET_ORDER, 0);
    $onlyNums[] = [$matches[0][1],$matches[0][2],$matches[0][3]];

}

// 1st part

/* for ($i = 0; $i < 502; $i++) {

    for ($counter = 0; $counter < $onlyNums[$i][0]; $counter++) {
    
        if (!empty($crates[$onlyNums[$i][1] - 1])) {

        $move = array_pop($crates[$onlyNums[$i][1] - 1]);

        array_push($crates[$onlyNums[$i][2] - 1], $move);

        } 

    }

} */

// 2nd part

for ($i = 0; $i < 502; $i++) {

    if (!empty($crates[$onlyNums[$i][1] - 1])) {

        $move = array_splice($crates[$onlyNums[$i][1] - 1], - $onlyNums[$i][0]);
        array_push($crates[$onlyNums[$i][2] - 1], ...$move);

        } 

}

// Print out the top crates

foreach ($crates as $crate) {

    echo end($crate);

}