<?php/*First Algo*/function myAlgorithm($n){    $x = $n + 10;    $x = $x / 2;    return $x;}echo myAlgorithm(1);echo "<br>"; /* Second Algo */function myAlgorithm2($n){    $sum = 0;    for ($i = 0; $i < $n; $i++){        $sum += $i;        if ($sum >= 1000){            break;        }    }    return $sum;}echo myAlgorithm2(1000);echo "<br>";/*Pyramid*///$line = 6;//$print = '*';//$quantity = 5;//for ($i = 1; $i <= $line; $i++){//    for($j = $quantity; $j >= $line; $j-- ){//        echo $j;//        echo $print;//        $print = $print .'*';//        echo "<br>";/* 1-2-3-4-5-6 */$n = 10;for ($i = 1; $i<= $n; $i++){    if($i < 10){        echo $i.'-';    }    elseif ($i = 10){        echo $i;    }}echo "<br>";/*Triangle*/for($i = 1; $i <= 5; $i++){    for($j = 1; $j <= $i; $j++){        echo '*';    }    echo '<br>';}echo '<br>';/*Ulta Pyramid*/$n = 5;for($i = 1; $i <= $n; $i++){    for($j = 1; $j<= $i; $j++){        echo '*';    }    echo '<br>';}for ($i = $n; $i >=1; $i--){    for($j =1; $j <=$i; $j++){        echo '*';    }    echo '<br>';}    