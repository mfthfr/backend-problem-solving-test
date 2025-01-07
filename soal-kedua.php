<?php

function soalKedua($ranked, $player){
    $uniqueRanked = array_values(array_unique($ranked));
    rsort($uniqueRanked);

    $playerRank = [];
    foreach ($player as $score) {
        $rank = 1;
        foreach ($uniqueRanked as $rankedScore) {
            if($score < $rankedScore){
                $rank++;
            }else{
                break;
            }
        }
        $playerRank[] = $rank;
    }

    return $playerRank;
}

// input
$ranked = [100, 100, 50, 40, 40, 20, 10];
$player = [5, 25, 50, 120];

// $ranked = [100, 80, 80, 70];
// $player = [60, 70, 100];

$result = soalKedua($ranked, $player);
echo "\n";
echo "Output: " . implode(" ", $result) . "\n";
echo "\n";

?>