<?php

$content = file_get_contents('day1.txt');

$chunks = explode("\n\n", $content);

$sums = [];

foreach ($chunks as $chunk) {
    $nums = explode("\n", $chunk); 
    $sums[] = array_sum($nums);
}

echo max($sums);

rsort($sums, SORT_NUMERIC); 

echo "\n" . ($sums[0] + $sums[1] + $sums[2]);