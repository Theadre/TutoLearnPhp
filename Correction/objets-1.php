<?php
class Student {
    // constructeur
    public function __construct($first_name, $last_name) {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }

    public function say_name() {
        echo "Mon nom est " . $this->first_name . " " . $this->last_name . ".\n";
    }
}

$benoit = new Student("Benoit", "Crespin");
$benoit->say_name();


?>