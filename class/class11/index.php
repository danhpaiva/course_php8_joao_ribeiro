<?php
//Values are equal:
$number = (2 == 3); #false
echo $number . '<br>';
$number = (100 == 100); #true
echo $number . '<br>';
$number = (100 == '100'); #true
echo $number . '<br>';
$number = (100 === '100'); #false
echo $number . '<br>';
//Values are different:
$number = (2 != 3); #true
echo $number . '<br>';
$number = (100 != 100); #false
echo $number . '<br>';
$number = (100 != '100'); #false
echo $number . '<br>';
$number = (100 !== '100'); #true
echo $number . '<br>';
//Values are higher or lower:
$number = (2 > 3); #false
echo $number . '<br>';
$number = (2 < 3); #true
echo $number . '<br>';
$number = (50 >= 50); #true
echo $number . '<br>';
$number = (50 <= 50); #true
echo $number . '<br>';
//SPACESHIP OPERATOR
$number = 1 <=> 1; # 0 (1 == 1)
echo $number . '<br>';
$number = 3 <=> 2; # 1 (3 > 1)
echo $number . '<br>';
$number = 2 <=> 3; # -1 (2 < 3)
echo $number . '<br>';
