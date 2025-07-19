<?php
session_start();

// Generate the number if not already set
if (!isset($_SESSION['number'])) {
    $_SESSION['number'] = rand(1, 100);
    $_SESSION['attempts'] = 0;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Guess the Number</title>
</head>
<body>
    <h1>Guess the Number (1–100)</h1>
    <form action="guess.php" method="post">
        <label>Your Guess:</label>
        <input type="number" name="guess" min="1" max="100" required>
        <input type="submit" value="Check">
    </form>

    <p>
        <?php
        if (isset($_SESSION['message'])) {
            echo $_SESSION['message'];
            unset($_SESSION['message']);
        }
        ?>
    </p>

    <form action="reset.php" method="post">
        <input type="submit" value="Reset Game">
    </form>
</body>
</html>
