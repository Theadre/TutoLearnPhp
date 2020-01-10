<?php
class Student {
    // constructor
    public function __construct($first_name, $last_name) {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }

    public function say_name() {
        echo "My name is " . $this->first_name . " " . $this->last_name . ".\n";
    }
}

$jeremy = new Student("Jérémy", "TASWIN AL KASID");
$jeremy->say_name();

class MathStudent extends Student {
    function sum_numbers($first_number, $second_number) {
        $sum = $first_number + $second_number;
        echo $this->first_name . " says that " . $first_number . " + " . $second_number . " is " . $sum;
    }
}

$jeremy2 = new MathStudent("Jérémy2", "TASWIN AL KASID2");
$jeremy2->say_name();
$jeremy2->sum_numbers(3, 5);
?>