<?php

$content = file_get_contents('day2.txt');

$matches = explode("\n", $content); 

$totalScore = 0; 

 foreach ($matches as $match) {

    
    switch ($match[0]) {
        case "A": 
            if ($match[2] === "Z")  {
                $totalScore += 8;
            } elseif ($match[2] === "Y") {
                $totalScore += 4;
            } else {
                $totalScore += 3;
            }
        break; 
        case "B": 
            if ($match[2] === "Z")  {
                $totalScore += 9;
            } elseif ($match[2] === "Y") {
                $totalScore += 5;
            } else {
                $totalScore += 1;
            }
        break; 
        case "C":
            if ($match[2] === "Z")  {
                $totalScore += 7;
            } elseif ($match[2] === "Y") {
                $totalScore += 6;
            } else {
                $totalScore += 2;
            }
        break;
    }
}

echo $totalScore;