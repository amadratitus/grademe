<?php
header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the input values
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    // Add the numbers
    $result = $num1 + $num2;

    // Return the result as JSON
    echo json_encode(array("result" => $result));
}
?>
