<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arvo:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link rel="stylesheet" href="./assets/css/exercises.css">
    <title>Exercise</title>
</head>

<body class="exercise">
    <header class="headerContainer">
        <h1>PHP Course</h1>
        <h2>Index of Exercises</h2>
    </header>
    <nav class="navigation">
        <a class="viewSourceCodeButton" href=<?= "{$_GET['dir']}/{$_GET['file']}.php" ?>>No formatting</a>
        <a class="backButton" href="index.php">To go back</a>
    </nav>
    <main class="mainContainer">
        <div class="mainContent">
            <?php
            include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
            ?>
        </div>
    </main>
    <footer class="footerContainer">
        <h4>Mateus Farias Costa - <?= date('Y'); ?></h4>
    </footer>
</body>

</html>