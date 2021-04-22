<?php
$babu = 26;
$max_points = 50;
$points = $max_points / 2;
// $min_points = $points;
$rupe = true;
$count = 1;

while ($rupe && $count != 50) {
    if ($babu == $points) {
        $rupe = false;
    } elseif ($babu >= $points) {
        $points = ($points / 2) / 2 + $points;
        $points = ceil($points);
        var_dump('大きい：' . $points);
        } elseif ($babu <= $points) {
        $points =  ($points / 2) / 2 + $points/2;
        // $min_points = $points;
        $points = ceil($points);
        var_dump('小さい：' . $points);
    }
    $count += 1;
}
