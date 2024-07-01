<?php
$num1 = 4;
$num2 = 5;
$num3 = 6;

if ($num1 >= $num2 && $num1 >= $num3) {
    $largestNumber = $num1;
} elseif ($num2 >= $num1 && $num2 >= $num3) {
    $largestNumber = $num2;
} else {
    $largestNumber = $num3;
}

echo "The largest number is: $largestNumber";
?>


<?php
$temperature = 32 * 9/5 + 32;
printf("The temperature in Fahrenheit is: %.2f", $temperature);

?>

