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

// Test simple calculator
echo "Simple Calculator Operations:\n";
echo "Addition: " . calculate(5, 3, '+') . "\n";
echo "Subtraction: " . calculate(5, 3, '-') . "\n";
echo "Multiplication: " . calculate(5, 3, '*') . "\n";
echo "Division: " . calculate(5, 3, '/') . "\n";

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

// Test transpose of a matrix
echo "\nTranspose of a Matrix:\n";
$matrix = [[1, 2, 3], [4, 5, 6], [7, 8, 9]];
$transpose = transposeMatrix($matrix);
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

// Test multiplication of two matrices
echo "\nMultiplication of Two Matrices:\n";
$matrix1 = [[1, 2], [3, 4]];
$matrix2 = [[5, 6], [7, 8]];
$result = multiplyMatrices($matrix1, $matrix2);
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

// Test addition of two matrices
echo "\nAddition of Two Matrices:\n";
$matrix1 = [[1, 2], [3, 4]];
$matrix2 = [[5, 6], [7, 8]];
$result = addMatrices($matrix1, $matrix2);
foreach ($result as $row) {
    echo implode(' ', $row) . "\n";
}
?>
