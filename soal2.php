<?php
$leaderboard=array(200,100,100,50,10);
$player=array(20,80,80,10,10,300);
$merge=array_merge($leaderboard,$player);
$distinc=array_unique($merge);
$data=$distinc;
rsort($data);
//print_r($sorting) ;
//echo $sorting;

foreach ($distinc as $key => $value) {
    foreach ($data as $ordered_key => $ordered_value) {
        if ($value === $ordered_value) {
            $key = $ordered_key;
            break;
        }
    }
    echo $value . '- Rank: ' . ((int) $key + 1) . '';
}
?>