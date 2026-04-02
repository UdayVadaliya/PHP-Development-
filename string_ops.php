<?php
$nl = "<br>"; 

$str = "Hello hello helllo ";

echo $str;
 
$len = strlen($str);
//this is used for connecting the string 
echo "$nl The length of string is: ". $len. " and Thank You!";
//This is used to count words in our string  
echo "$nl The number of the words in our string is ". str_word_count($str). " and Thank you!";
// this is used to reverse the string
echo "$nl for revercing the string ". strrev($str). " and Thank you!";
// this is used for searching a character in string 
echo "$nl search for is  ". strpos($str, "o"). " and Thank you!";
//this is used for replacing a word with another word.
echo "$nl replacing the word   ". str_replace("o", "go", $str). " and Thank you!";




?>