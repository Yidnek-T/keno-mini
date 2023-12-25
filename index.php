<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Virtual Keno Game</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: white;
            padding: 15px;
        }

        nav {
            background-color: #4caf50;
            padding: 10px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-size: 18px;
        }

        main {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
        }

        form {
            margin-top: 20px;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            background-color: #4caf50;
            color: white;
            border: none;
            border-radius: 4px;
        }

        #output {
            font-size: 18px;
            margin-top: 20px;
        }

        footer {
            background-color: #333;
            color: white;
            padding: 10px;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>

<header>
    <h1>Virtual Keno Game</h1>
</header>

<nav>
    <a href="#" title="Home">Home</a>
    <a href="#" title="About">About</a>
    <a href="#" title="How to Play">How to Play</a>
    <a href="#" title="Contact">Contact</a>
</nav>

<main>
    <?php include 'keno_game.php'; ?>
</main>

<footer>
    &copy; <?php echo date('Y'); ?> Virtual Keno Game. All rights reserved.
</footer>

</body>
</html>
