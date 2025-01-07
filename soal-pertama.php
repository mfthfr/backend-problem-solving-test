<?php

function soalPertama($n){
    $result = [];
    for ($i = 1; $i <= $n; $i++){
        $value = ($i * ($i + 1)) / 2 - ($i - 1);
        $result[] = $value;
    }

    return implode("-", $result);
}

$input = 7;
$output = soalPertama($input);

echo "\n";
echo "Input: $input\n";
echo "Output: $output\n";
echo "\n";

?>