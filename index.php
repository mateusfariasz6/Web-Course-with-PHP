<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arvo:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <title>PHP Course</title>
</head>

<body>
    <header class="headerContainer">
        <h1>PHP Course</h1>
        <h2>Index of Exercises</h2>
    </header>
    <main class="mainContainer">
        <div class="mainContent">
            <nav class="modules">
                <div class="module">
                    <h3>Basic</h3>
                    <ul>
                        <li>
                            <a href="exercise.php?dir=phpBasics&file=hello">Hello PHP</a>
                        </li>

                    </ul>
                </div>
                <div class="module">
                    <h3>Data types in php</h3>
                    <ul>
                        <li>
                            <a href="exercise.php?dir=Typesphp&file=int">Integer type</a>
                        </li>
                        <li>
                            <a href="exercise.php?dir=Typesphp&file=float">Float type</a>
                        </li>

                    </ul>
                </div>
            </nav>

        </div>
    </main>
    <footer class="footerContainer">
        <h4>Mateus Farias Costa - <?= date('Y'); ?></h4>
    </footer>
</body>

</html>