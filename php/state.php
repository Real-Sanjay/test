<?php
// print("a) Search for a word in variable states that ends in xas. Store this word in element 0 of a list named states List.\n");
// print("b) Search for a word in states that begins with k and ends in s. Perform a case-insensitive comparison. Store this word in element 1 of states List.\n");
// print("c) Search for a word in states that begins with M and ends in s. Store this word in element 2 of the list.\n");
// print("d) Search for a word in states that ends in a. Store this word in element 3 of the list.\n");





// Declare the variable states
$states = "Mississippi Alabama Texas Massachusetts Kansas";

// Initialize an empty array to store the search results
$statesList = array();

// Search for a word in $states that ends in "xas"
if (preg_match('/\b\w*xas\b/i', $states, $matches)) {
    $statesList[] = $matches[0];
} else {
    $statesList[] = "Not found";
}

// Search for a word in $states that begins with "k" and ends in "s"
if (preg_match('/\bk\w+s\b/i', $states, $matches)) {
    $statesList[] = $matches[0];
} else {
    $statesList[] = "Not found";
}

// Search for a word in $states that begins with "M" and ends in "s"
if (preg_match('/\bM\w+s\b/', $states, $matches)) {
    $statesList[] = $matches[0];
} else {
    $statesList[] = "Not found";
}

// Search for a word in $states that ends in "a"
if (preg_match('/\b\w+a\b/', $states, $matches)) {
    $statesList[] = $matches[0];
} else {
    $statesList[] = "Not found";
}

// Output the results
print_r($statesList);
?>
