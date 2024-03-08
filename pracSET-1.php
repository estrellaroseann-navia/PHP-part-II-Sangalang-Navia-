<?php
/**
 * calculates the total price of items in a shopping cart
 *
 * @param array $items An array containing items with 'name' and 'price' keys
 * @return float total price of all items
 */
function calculateTotalPrice(array $items): float {
    
    // use SRP which calculates the total price
    $total = 0;
    foreach ($items as $item) {
        $total += $item['price'];
    }
    return $total;
}

/**
 * string manipulation
 *
 * @param string $string The input string
 * @return string the modified string
 */
function modifyString(string $string): string {

    // remove spaces and convert to lowercase
    $string = str_replace(' ', '', $string);
    return strtolower($string);
}

/**
 * checks if a number is even or odd
 *
 * @param int $number the input number
 * @return string indication if the number is even or odd
 */
function checkEvenOrOdd(int $number): string {

    // use SRP to checks if a number is even or odd
    if ($number % 2 == 0) {
        return "The number $number is even.";
    } else {
        return "The number $number is odd.";
    }
}

// sample data
$items = [
    ['name' => 'Widget A', 'price' => 10],
    ['name' => 'Widget B', 'price' => 15],
    ['name' => 'Widget C', 'price' => 20],
];
$string = "This is a poorly written program with little 
structure and readability.";
$number = 42;

// calculate total price
$totalPrice = calculateTotalPrice($items);
echo "Total price: $" . $totalPrice . PHP_EOL;

// modify string
$modifiedString = modifyString($string);
echo "Modified string: " . $modifiedString . PHP_EOL;

// check if number is even or odd
$result = checkEvenOrOdd($number);
echo $result . PHP_EOL;
?>
