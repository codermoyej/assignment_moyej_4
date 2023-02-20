<?php

include_once("functions.php");

/* 3.Write a PHP function to remove the first and last element from an array 
and return the remaining elements as a new array.*/

$array_Values = array("one", "two", "three", "four", "five", "six", "seven", 8);

print_r(sliceArray($array_Values));
