<?php
require_once 'Zoo.php';

$zoo = new Zoo();

$tiger1 = new Tiger("Tiger1", 110, 220, 100, false, 10, 5);
$tiger2 = new Tiger("Tiger2", 105, 210, 95, true, 10, 5);
$loewe1 = new Löwe("Löwe1", 170, 250, 150, false, 15, 8);
$nashorn1 = new Nashorn("Nashorn1", 950, 3500, 800, false, 50);
$nashorn2 = new Nashorn("Nashorn2", 900, 3400, 780, true, 50);

$zoo->addTier($tiger1);
$zoo->addTier($tiger2);
$zoo->addTier($loewe1);
$zoo->addTier($nashorn1);
$zoo->addTier($nashorn2);

$zoo->feedAllAnimals();
