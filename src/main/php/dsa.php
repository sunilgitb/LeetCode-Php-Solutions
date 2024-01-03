<?php
function reverseInteger($number) {
    $reversed = 0;
    $isNegative = $number < 0 ? true : false;
    $number = abs($number);

    while ($number > 0) {
        $reversed = $reversed * 10 + $number % 10;
        $number = (int) ($number / 10);
    }

    return $isNegative ? -$reversed : $reversed;
}

$originalNumber = 12345;
$reversedNumber = reverseInteger($originalNumber);
echo "Original number: $originalNumber<br>";
echo "Reversed number: $reversedNumber";
?>