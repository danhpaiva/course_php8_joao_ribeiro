<?php
$string_one = 'Daniel Paiva';
$string_two = "danpaiva";

echo $string_one;
echo '<br>';
echo $string_two;
echo '<br>';

$string_one = 'Daniel ' . 'Paiva';
echo $string_one;
echo '<br>';

$string_one = 'Daniel';
$string_one .= ' Paiva';
echo $string_one;
echo '<br>';

$name = 'Daniel';
$last_name = ' Paiva';
$super_name = $name . $last_name;
echo "$super_name";
echo '<br>';

$person = 'Paiva';
$email = 'danpaiva@live.com';
$tag = 'danhpaiva';
$text = <<<LABEL
Hello Mr. $person.<br>
We send the contest rule to your $email.<br>
We appreciate your participation.<br>
Its unique tag is: $tag.
LABEL;

echo $text;
