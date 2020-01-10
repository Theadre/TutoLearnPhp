<?php
$odd_numbers = [1,3,5,7,9];
unset($odd_numbers[2]); // will remove the 3rd item (5) from the list
print_r($odd_numbers);
?>