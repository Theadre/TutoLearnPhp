<?php
class Student {
    // constructeur
    public function __construct($first_name, $last_name) {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }

    public function say_name() {
        echo "Mon nom est " . $this->first_name . " " . $this->last_name . ".<br>";
    }
}

$benoit = new Student("Benoit", "Crespin");
$benoit->say_name();

class MathStudent extends Student {
    function sum_numbers($first_number, $second_number) {
        $sum = $first_number + $second_number;
        echo $this->first_name . " dit que " . $first_number . " + " . $second_number . " est " . $sum . "<br>";
    }
}

$eric = new MathStudent("Eric", "Chang");
$eric->say_name();
$eric->sum_numbers(3, 5);


?>