<?php

$str = "Somesh Patil";

echo "Display String: ".$str;

echo "String Length:";
echo "<br>";
echo strlen($str);

echo "Reversing the String:";
echo "<br>";
echo strrev($str);

echo "Substring:";
echo "<br>";
echo substr($str,0,7);

echo "Uppercase String:";
echo "<br>";
echo strtoupper($str);

echo "Lowercase String:";
echo "<br>";
echo strtolower($str);

$str2 = "Rahul Patil";

echo "Compare two Strings:";
echo "<br>";
echo strcmp($str, $str2);

echo "Remove extra Spaces:";
echo "<br>";
echo trim($str);

echo "Position of a letter in a String";
echo "<br>";
echo strpos($str,"o");

echo "Replace word in a String";
echo "<br>";
echo str_replace("Somesh","Raman",$str);

echo "String Concatenation:";
echo "<br>";
echo $str.$str2;

?>
