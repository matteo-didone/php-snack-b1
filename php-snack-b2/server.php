<?php
// Storing name in a variable
$name = $_POST['name'];

// Storing mail in a variable
$mail = $_POST['mail'];

// Storing age in a variable
$age = $_POST['age'];


?>

<!DOCTYPE html>

<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Server</title>
    <link rel="stylesheet" href="server-style.css">
</head>

<body>
    <div class="container">
        <?php

        // Check that all the parameters are not empty strings 
        if ( empty($name) || empty($mail) || empty($age) ) {
            // If one of the parameters is empty, print "The strings are empty"
            echo "The strings are empty <br>";
        }

        // Check if name is longer than 3 characters
        if (strlen($name) > 3) {
            // Check if mail contains a dot and an at symbol
            if (str_contains($mail, ".") && str_contains($mail, "@")) {
                // Check if age is a number
                if (is_numeric($age)) {
                    // Access granted
                    echo "Access granted";
                } else {
                    // Age is not a number
                    echo "Access denied";
                }
            } else {
                // Mail does not contain a dot and an at symbol
                echo "Access denied";
            }
        } else {
            // Name is not longer than 3 characters
            echo "Access denied";
        }
        ?>
    </div>

</body>

</html>