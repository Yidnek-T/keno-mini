<form method="post">
    <label for="selectedNumbers">Select 10 numbers (1-80):</label>
    <br>
    <?php
    // Display number selection checkboxes
    for ($i = 1; $i <= 80; $i++) {
        echo "<input type='checkbox' name='selectedNumbers[]' value='$i'>$i ";
        if ($i % 10 === 0) {
            echo "<br>";
        }
    }
    ?>
    <br>
    <button type="submit" name="play">Play</button>
</form>

<div id="output">
    <?php
    // Include game logic
    include 'game_logic.php';
    ?>
</div>
