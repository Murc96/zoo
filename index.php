<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoo Project</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Welcome to the Zoo</h1>
    </header>
    <main style="padding: 20px">
        <?php
        include 'init.php';
        
        echo "<h3>Zoo Animals</h3>";
        foreach ($zoo->getTiere() as $tier) {
            $weight = $tier->getWeight();
            $maxWeight = $tier->getMaxWeight();
            $percentage = ($weight / $maxWeight) * 100;
            echo "<div class='animal'>";
            echo "<h3><a href='tier_detail.php?name=" . urlencode($tier->getName()) . "'>" . htmlspecialchars($tier->getName()) . "</a></h3>";
            echo "<div class='progress-bar'><div class='progress' style='width: " . htmlspecialchars($percentage) . "%;'>" . htmlspecialchars($weight) . " kg</div></div>";
            echo "</div>";
        }
        ?>
    </main>
    <footer>
        <p>&copy; 2024 Zoo Project</p>
    </footer>
</body>
</html>






