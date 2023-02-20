<?php

/*
1.Write a PHP function to sort an array of strings by their length, in ascending order. 
(Hint: You can use the usort() function to define a custom sorting function.)
*/
function assendingByLength($a, $b)
{
    return $a <=> $b;
}




/* 2.Write a PHP function to concatenate two strings, 
but with the second string starting from the end of the first string.
*/
function concatTwoString($firstString, $secondString)
{
    // Concat Two String
    return $firstString .= $secondString;
}

/* 
3.Write a PHP function to remove the first and last element from an array 
and return the remaining elements as a new array.
*/
function sliceArray($array_Values)
{
    $new_array = array_slice($array_Values, 1, -1);
    // print_r($new_array);
    return $new_array;
}


/*
4.Write a PHP function to check if a string contains only letters and whitespace.
 */
function validationString($input)
{
    if (preg_match('/^[\p{L&} ]+$/u', $input)) {
        return "Yes, String contains only letters and whitespace";
    } else {
        return "Insurt Invalid input name";
    }
}

/*
 5.Write a PHP function to find the second largest number in an array of numbers.
*/

function secondLargestNumber($arr)
{
    sort($arr);
    return $arr[sizeof($arr) - 2];
}
