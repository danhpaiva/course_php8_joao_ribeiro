<?php
$number_one = 100;
$number_two = 200;

$result = ($number_one < $number_two) && ($number_one < 1000); # AND => True
echo $result;
echo '<br>';

$result = ($number_one > $number_two) || ($number_one > 1000); # OR => False
echo $result;
echo '<br>';

$result = ($number_one < 150) && ($number_two > 300); # False
echo $result;
echo '<br>';

$result = ($number_one > 10) || ($number_two > 500); # True
echo $result;
echo '<br>';

$result = ($number_one == 100) && ($number_two < $number_one); # False
echo $result;
echo '<br>';

$number_one = false;
$result = !$number_one;
echo $result;
