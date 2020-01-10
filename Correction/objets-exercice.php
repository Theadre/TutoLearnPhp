<?php
class Car {
    public function __construct($brand, $year) {
        $this->brand = $brand;
        $this->year = $year;
    }

    public function print_details() {
        echo "Cette voiture est une " . $this->brand . " de " . $this->year . ".<br>";
    }
}

$car = new Car("Toyota", 2006);
$car->print_details();