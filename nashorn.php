<?php
require_once 'Tier.php';

class Nashorn extends Tier {
    public function __construct($name, $weight, $maxWeight, $minWeight, $isFemale, $foodPortion) {
        parent::__construct($name, $weight, $maxWeight, $minWeight, $isFemale, $foodPortion);
    }

    public function makeSound() {
        return $this->name . " makes a loud noise.";
    }
}
