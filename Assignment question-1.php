<?php
/*
1.Write a PHP function to sort an array of strings by their length, in ascending order. 
(Hint: You can use the usort() function to define a custom sorting function.)
*/
include_once("functions.php");

$arrayString = explode(" ", "PHP used to check all characters of a given string are alphabetic or not. If all characters");
usort($arrayString, "assendingByLength");

foreach ($arrayString as $key => $value) {
    echo "$key: $value \n";
}