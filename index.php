<html lang="en">
    <head>
        <title>Number Guessing Game</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f0f8ff;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                height: 100vh;
                margin: 0;
            }

            h1 {
                color: #333;
                margin-bottom: 20px;
            }

            form {
                background-color: #fff;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                width: 300px;
                margin-bottom: 10px;
            }

            label {
                display: block;
                margin-bottom: 10px;
                font-size: 16px;
                color: #333;
            }

            input[type="number"] {
                width: 100%;
                padding: 10px;
                margin-bottom: 15px;
                border: 1px solid #ccc;
                border-radius: 4px;
                font-size: 16px;
                box-sizing: border-box;
            }

            input[type="submit"] {
                width: 100%;
                padding: 10px;
                background-color: #28a745;
                border: none;
                border-radius: 4px;
                color: white;
                font-size: 16px;
                cursor: pointer;
                transition: background-color 0.3s ease;
            }

            input[type="submit"]:hover {
                background-color: #218838;
            }

            .give-up {
                background-color: #dc3545;
            }

            .give-up:hover {
                background-color: #c82333;
            }

            p {
                background-color: #f8d7da;
                color: #721c24;
                padding: 10px;
                border: 1px solid #f5c6cb;
                border-radius: 4px;
                margin-top: 20px;
                width: 300px;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <h1>Guess the Number Game</h1>

        <!-- Form for submitting the guess -->
        <form method="post" action="">
            <label for="guess">Enter your guess:</label>
            <input type="number" id="guess" name="guess" value="<?php if (isset($_POST['guess'])) echo $_POST['guess']; ?>" required>
            <input type="submit" value="Submit">
        </form>

        <!-- Form for giving up -->
        <form method="post" action="">
            <input type="hidden" name="give_up" value="1">
            <input type="submit" class="give-up" value="Give up">
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
