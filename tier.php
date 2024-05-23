<?php
class Tier {
    protected $name;
    protected $weight;
    protected $maxWeight;
    protected $minWeight;
    protected $isFemale;
    protected $foodPortion;

    public function __construct($name, $weight, $maxWeight, $minWeight, $isFemale, $foodPortion) {
        $this->name = $name;
        $this->weight = $weight;
        $this->maxWeight = $maxWeight;
        $this->minWeight = $minWeight;
        $this->isFemale = $isFemale;
        $this->foodPortion = $foodPortion;
    }

    public function pet() {
        echo $this->name . " makes a sound.<br>";
    }

    public function feed() {
        $this->weight += $this->foodPortion;
        if ($this->weight > $this->maxWeight) {
            $this->weight = $this->maxWeight;
        }
    }

    public function getWeight() {
        return $this->weight;
    }

    public function getMaxWeight() {
        return $this->maxWeight;
    }

    public function getMinWeight() {
        return $this->minWeight;
    }

    public function getName() {
        return $this->name;
    }

    public function makeSound() {
        return $this->name . " makes a sound.";
    }
}

