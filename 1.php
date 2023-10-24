<?php
$A = 1000;
$B = 1000;
$C = 50;
$N = 3;
$M = 3;

$salesData = [
    [25, 0, 0],
    [500, 500, 500],
    [80, 0, 0]
];

$count = 0;

for ($i = 0; $i < $N; $i++) {
    $cost = $A + $B * $M;
    $revenue = 0;

    for ($j = 0; $j < $M; $j++) {
        $revenue += $salesData[$i][$j] * $C;
    }

    $profit = $revenue - $cost;

    if ($profit < 0) {
        $count++;
    }
}

echo $count;
?>
