<?php

// Function to add two numbers
function add($num1, $num2) {
    return $num1 + $num2;
}

// Function to subtract two numbers
function subtract($num1, $num2) {
    return $num1 - $num2;
}

// Function to multiply two numbers
function multiply($num1, $num2) {
    return $num1 * $num2;
}

// Function to divide two numbers
function divide($num1, $num2) {
    if ($num2 != 0) {
        return $num1 / $num2;
    } else {
        echo "Error: Division by zero is not allowed.";
        exit();
    }
}

// Main program
echo "Simple Calculator\n";
echo "-----------------\n";

// Get user input
$num1 = readline("Enter the first number: ");
$num2 = readline("Enter the second number: ");
$operator = readline("Enter the operator (+, -, *, /): ");

// Perform calculation based on the selected operator
$result = 0;
switch ($operator) {
    case '+':
        $result = add($num1, $num2);
        break;
    case '-':
        $result = subtract($num1, $num2);
        break;
    case '*':
        $result = multiply($num1, $num2);
        break;
    case '/':
        $result = divide($num1, $num2);
        break;
    default:
        echo "Error: Invalid operator.";
        exit();
}

// Display the result
echo "Result: " . $result . "\n";
?>