<?php

$content = file_get_contents('day3.txt');

$rucksacks = explode("\n", $content); 

$values = array(1 => 'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
$sum = 0; 

foreach ($rucksacks as $rucksack) {

    $half = strlen($rucksack) / 2;

    $items = str_split($rucksack);

    $compartment1 = [];
    $compartment2 = [];

    foreach ($items as $item) {

        if (sizeof($compartment1) < $half) {
            $compartment1[] = $item; 
        } else {
            $compartment2[] = $item;
        }

    }

    $duplicateItems = array_intersect($compartment1, $compartment2);
    $uniqueDuplicateItems = array_unique($duplicateItems);

    foreach ($uniqueDuplicateItems as $item) {

        $value = array_search($item, $values);
        $sum += $value;

    }

}

echo $sum; 

$badgeSum = 0; 

for ($i = 0; $i < sizeof($rucksacks) - 1; $i += 3) {

    $elf1 = str_split($rucksacks[$i]);
    $elf2 = str_split($rucksacks[$i+1]); 
    $elf3 = str_split($rucksacks[$i+2]);
    $badge = array_unique(array_intersect($elf1,$elf2,$elf3));
    $badgeValue = array_search(implode($badge), $values);
    $badgeSum += $badgeValue;

}

echo "\n" . $badgeSum;

