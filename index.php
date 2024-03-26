<!-- index.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Numbers</title>
</head>
<body>
    <h1>Add Numbers</h1>
    <form method="post">
        <label for="num1">Number 1:</label>
        <input type="number" name="num1" id="num1" required>
        <br><br>
        <label for="num2">Number 2:</label>
        <input type="number" name="num2" id="num2" required>
        <br><br>
        <input type="submit" value="Add">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve the input values
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        // Add the numbers
        $result = $num1 + $num2;

        // Display the result
        echo "<p>Result: $result</p>";
    }
    ?>
</body>
</html>