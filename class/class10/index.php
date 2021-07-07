<?php
#'a' equals 1000 and 'b' equals half of 'a'.
#Reveal the value of 'b'.

$a = 1000;
echo 'B Value: ' . $b = $a / 2;
echo '<br>';

# 'a' equals 100 and 'b' equals 3x the value of 'a'.
#  the value of 'b'.

$a = 100;
echo 'B Value: ' . $b = $a * 3;
echo '<br>';

/*'a' is started and displayed with the value 20.
in the next statement, 'a' should be presented with the value '21'.*/

echo $a = 20;
echo '<br>';
echo ++$a;
echo '<br>';

/*'a' is equal to 100.
'b' is equal to 250.
'c' is equal to 'a' + 'b'
add one more unit to 'c'
reveal the value of 'c'*/

$a = 100;
$b = 250;

echo 'C Value: ' . $c = $a + $b + 1;
