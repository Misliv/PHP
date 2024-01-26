<?php
$set = [1, 2, 3];
$answer = [];

for($i = 0; $i < count($set); $i++) {
    echo $set[$i]."<br>";
    if($i < count($set)) {
        for($j = $i + 1; $j < count ($set); $j++) {
            echo $set[$i]."".$set[$j]."<br>";
            if($j < count($set)){
                for($k = $j + 1; $k < count($set); $k++) {
                    echo $set[$i]."".$set
                }
            }
        }
    }
}