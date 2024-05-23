<?php
require_once 'Raubkatzen.php';
require_once 'Nashorn.php';

class Zoo {
    private $tiere = [];

    public function addTier($tier) {
        $this->tiere[] = $tier;
    }

    public function getTiere() {
        return $this->tiere;
    }

    public function findTierByName($name) {
        foreach ($this->tiere as $tier) {
            if ($tier->getName() === $name) {
                return $tier;
            }
        }
        return null;
    }

    public function feedAllAnimals() {
        foreach ($this->tiere as $tier) {
            $tier->feed();
        }
    }

    public function petAllAnimals() {
        foreach ($this->tiere as $tier) {
            $tier->pet();
        }
    }

    public function allCatsRoar() {
        foreach ($this->tiere as $tier) {
            if ($tier instanceof Raubkatzen) {
                $tier->roar();
            }
        }
    }

    public function displayWeightsAndSounds() {
        foreach ($this->tiere as $tier) {
            $weight = $tier->getWeight();
            $maxWeight = $tier->getMaxWeight();
            $percentage = ($weight / $maxWeight) * 100;
            $sound = method_exists($tier, 'roar') ? $tier->roar() : $tier->makeSound();
            ?>
            <div class="animal">
                <h3><?php echo $tier->getName(); ?></h3>
                <p>Weight: <?php echo $weight; ?> kg</p>
                <div class="progress-bar">
                    <div class="progress" style="width: <?php echo $percentage; ?>%;">
                        <?php echo round($percentage, 2); ?>%
                    </div>
                </div>
                <p><?php echo $sound; ?></p>
            </div>
            <?php
        }
    }
}



