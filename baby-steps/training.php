<?php

for ($index = 1; $index < 101; $index++) {
    if ($index % 2 != 0) {
        echo $index, PHP_EOL;
    }
}

$number = 7;
for ($index = 0; $index <= 10; $index++) {
    echo $number * $index, PHP_EOL;

}

$weight = 100;
$height = 1.85;
$bmi = 100/(1.85 ** 2);

echo  "your BMU is $bmi. That's is ";

if ($bmi < 18.5) {
    echo "low.";
} elseif ($bmi < 25) {
    echo "normal.";
} else {
    echo "high.";
}






