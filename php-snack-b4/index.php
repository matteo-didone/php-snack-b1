<!-- 
Write a function that accepts three arguments: an array and two numbers ("a" smaller than "b" and "b" not exceeding the number of elements in the array).

The function will return a new array with values that have positions between "a" and "b"
-->

<?php
// Function that merges two arrays (having the same number of elements) by alternately taking elements from each array.
function myFunction($array, $a, $b)
{
    // I need to make sure tha that a < b 
    if ((count($array) < $a) || ($a > $b) ) {
        return false;
    } else {
        $newArray = [];
        for ($i = $a; $i < $b + 1; $i++) {
            // Push the elements of the two arrays into the new array
            $newArray[] = $array[$i];
        }
        // Return the new array
        return $newArray;
    }
}


// Call the function
var_dump(myFunction([1,2,3], 1, 100));
?>