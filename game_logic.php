<?php
// Process the form submission
if (isset($_POST['play'])) {
    // Validate selected numbers
    if (isset($_POST['selectedNumbers']) && count($_POST['selectedNumbers']) === 10) {
        // Generate 20 random numbers as the winning numbers
        $winningNumbers = generateRandomNumbers(20, 1, 80);

        // Display selected and winning numbers
        $selectedNumbers = $_POST['selectedNumbers'];
        echo "<br><strong>Your selected numbers:</strong> " . implode(', ', $selectedNumbers);
        echo "<br><strong>Winning numbers:</strong> " . implode(', ', $winningNumbers);

        // Determine the number of matched numbers
        $matchedNumbers = array_intersect($selectedNumbers, $winningNumbers);
        $numMatches = count($matchedNumbers);

        // Display the result
        echo "<br><strong>Number of matches:</strong> $numMatches";

        // Check if the player wins
        if ($numMatches >= 3) {
            echo "<br><strong>Congratulations! You won!</strong>";
        } else {
            echo "<br><strong>Try again next time!</strong>";
        }
    } else {
        echo "<br><strong>Please select exactly 10 numbers.</strong>";
    }
}

/**
 * Generates an array of unique random numbers within a specified range.
 *
 * @param int $count Number of random numbers to generate
 * @param int $min   Minimum value (inclusive)
 * @param int $max   Maximum value (inclusive)
 * @return array     Array of unique random numbers
 */
function generateRandomNumbers($count, $min, $max)
{
    $numbers = array();
    while (count($numbers) < $count) {
        $randomNumber = rand($min, $max);
        if (!in_array($randomNumber, $numbers)) {
            $numbers[] = $randomNumber;
        }
    }
    return $numbers;
}
?>
