<?php

function soalPertama($n){
    $result = [];
    for ($i = 1; $i <= $n; $i++){
        $value = ($i * ($i + 1)) / 2 - ($i - 1);
        $result[] = $value;
    }

    return implode("-", $result);
}

$input1 = 7;
$input2 = 10;
$input3 = 5;

$output1 = soalPertama($input1);
$output2 = soalPertama($input2);
$output3 = soalPertama($input3);

echo "\n";
echo "Output untuk Input $input1: $output1\n";
echo "Output untuk Input $input2: $output2\n";
echo "Output untuk Input $input3: $output3\n";
echo "\n";

?>