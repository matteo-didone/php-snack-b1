<!-- 
Write a function that merges two arrays (having the same number of elements) by alternately taking elements from each array.

For example, given [a,b,c,d,e] and [1,2,3,4,5], the function should return [a,1,b,2,c,3,d,4,e,5].
-->

<?php
// Function that merges two arrays (having the same number of elements) by alternately taking elements from each array.
function mergeArrays($array1, $array2)
{
    // Create new empty array that we'll be using to merge the two arrays given as method parameters
    $mergedArray = [];
    // For loop that iterates over the two arrays given as method parameters
    for ($i = 0; $i < count($array1); $i++) {
        // Push the elements of the two arrays into the new array
        $mergedArray[] = $array1[$i];
        $mergedArray[] = $array2[$i];
    }
    // Return the new array
    return $mergedArray;
}

// Create two arrays
$lettersArray = ['a', 'b', 'c', 'd', 'e'];
$numbersArray = [1, 2, 3, 4, 5];

// Call the function and store the returned value in a variable
$mergedArray = mergeArrays($lettersArray, $numbersArray);
?>

<!DOCTYPE html>

<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Merging Array</title>
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <?php
        // Print the merged array, in a nice format 
        echo "Array: ";
        echo "[";
        foreach ($mergedArray as $value) {
            echo $value . ", ";
        }
        echo "]";
        ?>
    </div>
</body>

</html>