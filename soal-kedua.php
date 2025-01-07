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
$ranked1 = [100, 100, 50, 40, 40, 20, 10];
$player1 = [5, 25, 50, 120];

$ranked2 = [100, 80, 80, 70];
$player2 = [60, 70, 100];

$ranked3 = [90, 80, 70, 60, 50];
$player3 = [30, 40, 80, 120];

$result1 = soalKedua($ranked1, $player1);
$result2 = soalKedua($ranked2, $player2);
$result3 = soalKedua($ranked3, $player3);

echo "\n";
echo "Output untuk Input 1: " . implode(" ", $result1) . "\n";
echo "Output untuk Input 2: " . implode(" ", $result2) . "\n";
echo "Output untuk Input 3: " . implode(" ", $result3) . "\n";
echo "\n";

?>