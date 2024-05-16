<?php

/*
$fruits = [
    "apple",
    "berry",
    "orange",
    "strawberry"
];

array_splice($fruits, 0, 2); // Remove elements from index 0 to 2

unset($fruits[1]); // Delete a specific element

echo $fruits[0];
*/

/*
$tasks = [
    "laundry" => "Daniel",
    "trash" => "John",
    "dishes" =>  "Leo",
    "kitchen" =>  "Bella"
];

// echo $tasks["laundry"];

// print_r($tasks); // Display all tasks
echo count($tasks);

sort($tasks);
print_r($tasks);
*/

$fruits = [
    "apple",
    "berry",
    "orange",
    "strawberry"
];

$tests = ["kiwi", "banana"];

array_push($fruits, "mango"); // Alternatively: $fruits[] = "mango" (for associative arrays, use $tasks["vacuum"] = "Sam")

array_splice($fruits, 2, 0, $tests); // Insert elements from index 2
array_splice($fruits, 1, 1); // Remove element at index 1

print_r($fruits);
