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

$tierName = $_GET['name'] ?? null;
$tier = $zoo->findTierByName($tierName);
if (!$tier) {
    echo "Tier nicht gefunden.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($tier->getName()); ?> - Zoo Project</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1><?php echo htmlspecialchars($tier->getName()); ?></h1>
    </header>
    <main style="padding: 20px">
        <div class="animal-details">
            <p>How Dangerous is <?php echo htmlspecialchars($tier->getName()); ?>? (0-100): <?php echo htmlspecialchars($tier instanceof Raubkatzen ? $tier->getDanger() : 'N/A'); ?></p>
            <div class="progress-bar">
                <div class="progress" style="width: <?php echo htmlspecialchars($tier->getWeight() / $tier->getMaxWeight() * 100); ?>%;"></div>
            </div>
            <p><?php echo htmlspecialchars($tier->makeSound()); ?></p>
            <div class="weight-bar">
                <p>Min weight (<?php echo htmlspecialchars($tier->getMinWeight()); ?>):</p>
                <div class="progress-bar">
                    <div class="progress" style="width: <?php echo htmlspecialchars($tier->getMinWeight() / $tier->getMaxWeight() * 100); ?>%;"></div>
                </div>
                <p>Actual weight (<?php echo htmlspecialchars($tier->getWeight()); ?>):</p>
                <div class="progress-bar">
                    <div class="progress" style="width: <?php echo htmlspecialchars($tier->getWeight() / $tier->getMaxWeight() * 100); ?>%;"></div>
                </div>
                <p>Max weight (<?php echo htmlspecialchars($tier->getMaxWeight()); ?>):</p>
                <div class="progress-bar">
                    <div class="progress" style="width: 100%;"></div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <p>&copy; 2024 Zoo Project</p>
    </footer>
</body>
</html>


