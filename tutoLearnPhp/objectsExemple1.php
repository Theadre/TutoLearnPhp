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

$alex = new Student("Jérémy", "TASWIN AL KASID");
$alex->say_name();
?>