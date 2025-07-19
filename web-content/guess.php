<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['guess'])) {
    $guess = intval($_POST['guess']);
    $_SESSION['attempts']++;

    if ($guess == $_SESSION['number']) {
        $_SESSION['message'] = "🎉 Correct! You guessed it in {$_SESSION['attempts']} tries.";
    } elseif ($guess < $_SESSION['number']) {
        $_SESSION['message'] = "🔻 Too low! Try again.";
    } else {
        $_SESSION['message'] = "🔺 Too high! Try again.";
    }
}

header("Location: index.php");
exit();
