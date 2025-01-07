<?php

function soalKetiga($input){
    // mendefinisikan pasangan bracket
    $brackets = [
        ')' => '(',
        ']' => '[',
        '}' => '{'
    ];

    // stack kosong untuk menyimpan bracket yg belum dipasangkan
    $stack = [];

    for($i = 0; $i < strlen($input); $i++){
        $char = $input[$i];

        // jika bracket pembuka maka tambahkan ke stack
        // jika bracket penutup maka ambil elemen terakhir dari stack untuk dicocokan dengan bracket penutup
        if(in_array($char, ['(', '[', '{'])){
            array_push($stack, $char);
        }elseif(in_array($char, [')', ']', '}'])){
            $top = array_pop($stack);

            // jika tidak cocok, maka bracket tidak seimbang
            if($top !== $brackets[$char]){
                return "NO";
            }
        }
    }

    return empty($stack) ? "YES" : "NO";
}

$input1 = "{[()]}";
$input2 = "{[(])}";
$input3 = "{(([])[])[]}";

// kasus tes
echo "\n";
echo soalKetiga($input1) . "\n";
echo soalKetiga($input2) . "\n";
echo soalKetiga($input3) . "\n";
echo "\n";

?>