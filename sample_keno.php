<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keno Game</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        header {
            background-color: #4caf50;
            color: white;
            padding: 20px;
            text-align: center;
        }

        nav {
            background-color: #333;
            overflow: hidden;
        }

        nav a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        nav a:hover {
            background-color: #ddd;
            color: black;
        }

        .container {
            margin: 20px;
            padding: 20px;
        }

        h1 {
            color: #4caf50;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            margin-top: 20px;
            background-color: #4caf50;
            color: white;
            border: none;
            cursor: pointer;
        }

        .number-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(80px, 1fr));
            gap: 4px;
            margin-top: 20px;
        }

        .number-grid label {
            display: block;
            background-color: #ddd;
            padding: 10px;
            cursor: pointer;
            font-size: 14px;
            text-align: center;
        }

        .number-grid input {
            display: inline-block;
            margin-bottom: 2px;
        }

        .result {
            font-size: 16px;
            font-weight: bold;
            margin-top: 20px;
            color: #4caf50;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        img {
            width: 100%;
            max-width: 150px;
            margin-top: 20px;
        }

        /* Responsive styles */
        @media screen and (max-width: 768px) {
            nav a {
                float: none;
                width: 100%;
                text-align: center;
            }

            .number-grid label {
                padding: 8px;
            }
        }
    </style>
</head>
<body>

<header>
    <h1>Keno Game</h1>
</header>

<nav>
    <a href="#">Home</a>
    <a href="#">About</a>
    <a href="#">Contact</a>
</nav>

<div class="container">
    <?php
    function generateKenoNumbers($count = 20, $min = 1, $max = 80) {
        $numbers = range($min, $max);
        shuffle($numbers);
        return array_slice($numbers, 0, $count);
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $drawnNumbers = generateKenoNumbers();
        $playerNumbers = isset($_POST['numbers']) ? array_map('intval', $_POST['numbers']) : [];

        echo "<p>Player Numbers: " . implode(', ', $playerNumbers) . "</p>";
        echo "<p>Drawn Numbers: " . implode(', ', $drawnNumbers) . "</p>";

        $matches = array_intersect($playerNumbers, $drawnNumbers);
        echo "<p>Matches: " . count($matches) . "</p>";

        // Determine if the player has won or lost
        $result = count($matches) >= 2 ? "Congratulations! You Win!" : "Sorry, You Lose. Try Again!";
        echo "<p class='result'>$result</p>";
    }
    ?>

    <form method="post">
        <label for="numbers">Select 10 numbers (1-80): </label>
        <div class="number-grid">
            <?php for ($i = 1; $i <= 80; $i++) : ?>
                <label>
                    <input type="checkbox" name="numbers[]" value="<?= $i ?>" id="num<?= $i ?>">
                    <?= $i ?>
                </label>
            <?php endfor; ?>
        </div>
        <button type="submit">Play</button>
    </form>

    <img src="path/to/your/image.jpg" alt="Keno Image">
</div>

<footer>
    &copy; 2023 Keno Game. All rights reserved.
</footer>

</body>
</html>