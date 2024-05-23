<?php
require_once 'Tier.php';

abstract class Raubkatzen extends Tier {
    protected $danger;

    public function __construct($name, $weight, $maxWeight, $minWeight, $isFemale, $foodPortion, $danger) {
        parent::__construct($name, $weight, $maxWeight, $minWeight, $isFemale, $foodPortion);
        $this->danger = $danger;
    }

    public function getDanger() {
        return $this->danger;
    }

    abstract public function roar();
}

class Tiger extends Raubkatzen {
    public function __construct($name, $weight, $maxWeight, $minWeight, $isFemale, $foodPortion, $danger) {
        parent::__construct($name, $weight, $maxWeight, $minWeight, $isFemale, $foodPortion, $danger);
    }

    public function roar() {
        return $this->name . " says: Roar!";
    }

    public function makeSound() {
        return $this->roar();
    }
}

class Löwe extends Raubkatzen {
    public function __construct($name, $weight, $maxWeight, $minWeight, $isFemale, $foodPortion, $danger) {
        parent::__construct($name, $weight, $maxWeight, $minWeight, $isFemale, $foodPortion, $danger);
    }

    public function roar() {
        return $this->name . " says: Rooooaaar!";
    }

    public function makeSound() {
        return $this->roar();
    }
}


