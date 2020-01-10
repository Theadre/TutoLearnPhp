<?php
$phone_numbers = [
    "Jérémy" => "415-235-8573",
    "Jérémy2" => "415-492-4856",
];

if (array_key_exists("Alex", $phone_numbers)) {
    echo "Jérémy's phone number is " . $phone_numbers["Jérémy"] . "\n";
} else {
    echo "Jérémy's phone number is not in the phone book!";
}

if (array_key_exists("Jérémy3", $phone_numbers)) {
    echo "Jérémy3's phone number is " . $phone_numbers["Jérémy3"] . "\n";
} else {
    echo "Jérémy3's phone number is not in the phone book!";
}
?>
