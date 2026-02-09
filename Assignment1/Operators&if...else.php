<?php

// Challenge 1: Arithmetic Operations

$num1 = 10;
$num2 = 5;

echo "Challenge 1: Arithmetic Operations\n";
echo "Number 1: $num1\n";
echo "Number 2: $num2\n";
echo "Addition: " . ($num1 + $num2) . "\n";
echo "Subtraction: " . ($num1 - $num2) . "\n";
echo "Multiplication: " . ($num1 * $num2) . "\n";
echo "Division: " . ($num1 / $num2) . "\n";
echo "Modulus: " . ($num1 % $num2) . "\n\n";


// Challenge 2: Even or Odd

$number = 7;
echo "Challenge 2: Even or Odd\n";
echo "Input: $number\n";
if ($number % 2 == 0) {
    echo "$number is an even number.\n\n";
} else {
    echo "$number is an odd number.\n\n";
}


// Challenge 3: Increment & Decrement

$start = 10;
echo "Challenge 3: Increment & Decrement\n";
echo "Starting number: $start\n";
$start++;
echo "After increment: $start\n";
$start--;
echo "After decrement: $start\n\n";


// Challenge 4: Grading System

$marks = 85;
echo "Challenge 4: Grading System\n";
echo "Input: $marks\n";

if ($marks >= 90) {
    $grade = "A";
} elseif ($marks >= 80) {
    $grade = "B";
} elseif ($marks >= 70) {
    $grade = "C";
} elseif ($marks >= 60) {
    $grade = "D";
} else {
    $grade = "F";
}

echo "Output: You got a $grade!\n\n";


// Challenge 5: Leap Year Check

$year = 2024;
echo "Challenge 5: Leap Year Check\n";
echo "Input: $year\n";

if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
    echo "Output: $year is a leap year\n";
} else {
    echo "Output: $year is not a leap year\n";
}
?>
