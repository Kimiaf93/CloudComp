<?php
session_start();
unset($_SESSION['number']);
unset($_SESSION['attempts']);
unset($_SESSION['message']);
header("Location: index.php");
exit();
