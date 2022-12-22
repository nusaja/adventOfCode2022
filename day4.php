<?php

$content = file_get_contents('day4.txt');

$elfPairs = explode("\n", $content); 

$fullyContainedAssignments = 0; 
$overlappingRanges = 0;

foreach ($elfPairs as $elfPair) {

    $sections = explode(",", $elfPair);
    $counter = 1; 
    $elf1 = [];
    $elf2 = [];

    foreach ($sections as $section) {

        $range = explode("-", $section);

        if ($counter == 1) {

            if ($range[0] == $range[1]) {
                $elf1[] = $range[0]; 
            } else {
                $elf1 = range($range[0], $range[1]);
            }

           $counter += 1;  
           continue;

        } 

        if ($counter == 2) {

            if ($range[0] == $range[1]) {
                $elf2[] = $range[0]; 
            } else {
                $elf2 = range($range[0], $range[1]);
            }

        }           
        
    }

    if (sizeof(array_intersect($elf1, $elf2)) > 0) {

        $overlappingRanges += 1;

    }

    $mergedElves = array_merge($elf1, $elf2); 
    $noDuplicates= array_diff($mergedElves, array_diff_assoc($mergedElves, array_unique($mergedElves)));

    if (sizeof(array_intersect($noDuplicates, $elf1)) > 0 && sizeof(array_intersect($noDuplicates, $elf2)) > 0) {

        continue; 

    } else {

        $fullyContainedAssignments += 1;

    }

}

echo $fullyContainedAssignments . "\n";
echo $overlappingRanges;

