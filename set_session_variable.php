<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the variable name and value from the AJAX request
    $variableName = $_POST['variableName'];
    $value = $_POST['value'];

    // Set the session variable
    $_SESSION[$variableName] = $value;
}
?>