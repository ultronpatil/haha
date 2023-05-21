<?php
// Define an array
$fruits = array("Apple", "Banana", "Orange", "Mango", "Grapes");

// 1. count() - Count the number of elements in an array
$numberOfFruits = count($fruits);
echo "Number of fruits: " . $numberOfFruits . "<br>";

// 2. array_push() - Add one or more elements to the end of an array
array_push($fruits, "Strawberry", "Pineapple");
echo "Fruits after pushing: ";
print_r($fruits);
echo "<br>";

// 3. array_pop() - Remove and return the last element of an array
$removedFruit = array_pop($fruits);
echo "Removed fruit: " . $removedFruit . "<br>";
echo "Fruits after popping: ";
print_r($fruits);
echo "<br>";

// 4. array_search() - Search an array for a given value and return its key/index
$key = array_search("Banana", $fruits);
echo "Key of Banana: " . $key . "<br>";

// 5. array_reverse() - Reverse the order of elements in an array
$reversedArray = array_reverse($fruits);
echo "Reversed array: ";
print_r($reversedArray);
echo "<br>";
?>
