<?php
class Student {
    // le constructeur devrait être public
    public function __construct($first_name, $last_name) {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }

    // pour utilisation externe
    public function say_name() {
        echo "Mon nom est " . $this->full_name() . "<br>";
    }

    // pour utilisation interne
    private function full_name() {
        return $this->first_name . " " . $this->last_name;
    }
}

$benoit = new Student("Benoit", "Crespin");
$benoit->say_name();

// ceci ne marchera pas
echo $benoit->full_name();


?>