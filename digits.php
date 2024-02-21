<?php
// Function to calculate the sum of digits of a number
function sumOfDigits($number) {
    $sum = 0;
    while ($number != 0) {
        $sum += $number % 10;
        $number = (int)($number / 10);
    }
    return $sum;
}

// Function to check if a number contains the digit 7
function containsSeven($number) {
    return strpos((string)$number, '7') !== false;
}

$count = 0;
$number = 1;
while ($count < 10) {
    if (sumOfDigits($number) == 10 && containsSeven($number)) {
        echo $number . "\n";
        $count++;
    }
    $number++;
}
?>
