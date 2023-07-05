<!-- 
Using a form, pass the parameters name, mail, and age as GET requests, and verify (by searching for methods we don't know in the documentation) that:

name is longer than 3 characters,
mail contains a dot and an at symbol (@), and
age is a number.
If everything is okay, print "Access granted"; otherwise, print "Access denied."
-->

<?php

?>

<!DOCTYPE html>

<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Email Login</title>
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>
    <!-- Form Section -->
    <!-- Action is the receiver of my form's data -->
    <!-- Method is the method that's being used to pass the data -->
    <form action="server.php" method="POST">

        <!-- First Label -->
        <label for="name">Name: </label>
        <!-- Name Paragraph Field -->
        <input type="text" name="name" id="name">

        <!-- Second Label -->
        <label for="mail">Mail: </label>
        <!-- Word that needs to be censored -->
        <input type="text" name="mail" id="mail">

        <!-- Third Label -->
        <label for="age">Age: </label>
        <!-- Word that needs to be censored -->
        <input type="text" name="age" id="age">

        <button type="submit">
            Send the form
        </button>
    </form>
</body>

</html>