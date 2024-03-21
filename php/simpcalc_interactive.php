<?php
// Simple Calculator Operations
function calculate($num1, $num2, $operator) {
    switch($operator) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        case '/':
            if ($num2 == 0) {
                return "Error: Division by zero";
            } else {
                return $num1 / $num2;
            }
        default:
            return "Error: Invalid operator";
    }
}

// Get input for calculator operation
echo "Simple Calculator Operations:\n";
$num1 = readline("Enter first number: ");
$num2 = readline("Enter second number: ");
$operator = readline("Enter operator (+, -, *, /): ");

// Perform calculation and display result
$result = calculate($num1, $num2, $operator);
echo "Result: $result\n";

// Find the transpose of a matrix
function transposeMatrix($matrix) {
    $rows = count($matrix);
    $cols = count($matrix[0]);
    
    $transpose = [];
    for ($i = 0; $i < $cols; $i++) {
        for ($j = 0; $j < $rows; $j++) {
            $transpose[$i][$j] = $matrix[$j][$i];
        }
    }
    return $transpose;
}

// Get input for matrix
echo "\nTranspose of a Matrix:\n";
$rows = readline("Enter number of rows: ");
$cols = readline("Enter number of columns: ");
$matrix = [];
for ($i = 0; $i < $rows; $i++) {
    $matrix[$i] = [];
    for ($j = 0; $j < $cols; $j++) {
        $matrix[$i][$j] = readline("Enter element at row $i, column $j: ");
    }
}

// Display original matrix
echo "Original Matrix:\n";
foreach ($matrix as $row) {
    echo implode(' ', $row) . "\n";
}

// Calculate and display transpose of the matrix
$transpose = transposeMatrix($matrix);
echo "Transpose of the Matrix:\n";
foreach ($transpose as $row) {
    echo implode(' ', $row) . "\n";
}

// Multiplication of two matrices
function multiplyMatrices($matrix1, $matrix2) {
    $rows1 = count($matrix1);
    $cols1 = count($matrix1[0]);
    $cols2 = count($matrix2[0]);
    
    $result = [];
    for ($i = 0; $i < $rows1; $i++) {
        for ($j = 0; $j < $cols2; $j++) {
            $result[$i][$j] = 0;
            for ($k = 0; $k < $cols1; $k++) {
                $result[$i][$j] += $matrix1[$i][$k] * $matrix2[$k][$j];
            }
        }
    }
    return $result;
}

// Get input for matrices
echo "\nMultiplication of Two Matrices:\n";
$rows1 = readline("Enter number of rows for matrix 1: ");
$cols1 = readline("Enter number of columns for matrix 1: ");
$matrix1 = [];
for ($i = 0; $i < $rows1; $i++) {
    $matrix1[$i] = [];
    for ($j = 0; $j < $cols1; $j++) {
        $matrix1[$i][$j] = readline("Enter element at row $i, column $j for matrix 1: ");
    }
}

$rows2 = readline("Enter number of rows for matrix 2: ");
$cols2 = readline("Enter number of columns for matrix 2: ");
$matrix2 = [];
for ($i = 0; $i < $rows2; $i++) {
    $matrix2[$i] = [];
    for ($j = 0; $j < $cols2; $j++) {
        $matrix2[$i][$j] = readline("Enter element at row $i, column $j for matrix 2: ");
    }
}

// Display matrices
echo "Matrix 1:\n";
foreach ($matrix1 as $row) {
    echo implode(' ', $row) . "\n";
}

echo "Matrix 2:\n";
foreach ($matrix2 as $row) {
    echo implode(' ', $row) . "\n";
}

// Perform multiplication and display result
$result = multiplyMatrices($matrix1, $matrix2);
echo "Result:\n";
foreach ($result as $row) {
    echo implode(' ', $row) . "\n";
}

// Addition of two matrices
function addMatrices($matrix1, $matrix2) {
    $rows = count($matrix1);
    $cols = count($matrix1[0]);
    
    $result = [];
    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j < $cols; $j++) {
            $result[$i][$j] = $matrix1[$i][$j] + $matrix2[$i][$j];
        }
    }
    return $result;
}

// Get input for matrices
echo "\nAddition of Two Matrices:\n";
$rows = readline("Enter number of rows: ");
$cols = readline("Enter number of columns: ");
$matrix1 = [];
for ($i = 0; $i < $rows; $i++) {
    $matrix1[$i] = [];
    for ($j = 0; $j < $cols; $j++) {
        $matrix1[$i][$j] = readline("Enter element at row $i, column $j for matrix 1: ");
    }
}

$matrix2 = [];
for ($i = 0; $i < $rows; $i++) {
    $matrix2[$i] = [];
    for ($j = 0; $j < $cols; $j++) {
        $matrix2[$i][$j] = readline("Enter element at row $i, column $j for matrix 2: ");
    }
}

// Display matrices
echo "Matrix 1:\n";
foreach ($matrix1 as $row) {
    echo implode(' ', $row) . "\n";
}

echo "Matrix 2:\n";
foreach ($matrix2 as $row) {
    echo implode(' ', $row) . "\n";
}

// Perform addition and display result
$result = addMatrices($matrix1, $matrix2);
echo "Result:\n";
foreach ($result as $row) {
    echo implode(' ', $row) . "\n";
}
?>
