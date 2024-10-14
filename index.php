<html lang="en">
    <head>
        <title>Number guessing game</title>
    </head>
    <body>
        <h1>Guess the number game</h1>

        <!-- Form for submitting the guess -->
        <form method="post" action="">
            <label for="guess">Enter your guess:</label>
            <input type="number" id="guess" name="guess" value="<?php if (isset($_POST['guess'])) echo $_POST['guess']; ?>" required>
            <input type="submit" value="Submit">
        </form>

        <!-- Form for giving up -->
        <form method="post" action="">
            <input type="hidden" name="give_up" value="1">
            <input type="submit" value="Give up">
        </form>

        <?php
        // Include the PHP logic
        ob_start();    // Use output buffering
        include 'process_guess.php';
        $message = ob_get_clean();    // Capture the output from process_guess.php and store it in the $message variable.

        // Display the message returned from process_guess.php
        if (isset($message) && !empty($message)) {
            echo "<p>$message</p>";
        }
        ?>
    </body>
</html>
