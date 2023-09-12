<!DOCTYPE html>
<html>

<head>
  <title>Simple Calculator</title>
</head>

<body>

  <?php
  // Initialize variables
  $num1 = '';
  $num2 = '';
  $operation = '';
  $result = '';

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input from the form
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operation = $_POST["operation"];

    // Perform the selected operation
    switch ($operation) {
      case 'addition':
        $result = $num1 + $num2;
        break;
      case 'subtraction':
        $result = $num1 - $num2;
        break;
      case 'multiplication':
        $result = $num1 * $num2;
        break;
      case 'division':
        if ($num2 == 0) {
          $result = 'Cannot divide by zero';
        } else {
          $result = $num1 / $num2;
        }
        break;
    }
  }
  ?>

  <h1>Simple Calculator</h1>

  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="num1">Enter Number 1:</label>
    <input type="number" name="num1" id="num1" step="any" required><br>

    <label for="operation">Select Operation:</label>
    <select name="operation" id="operation">
      <option value="addition">Addition (+)</option>
      <option value="subtraction">Subtraction (-)</option>
      <option value="multiplication">Multiplication (*)</option>
      <option value="division">Division (/)</option>
    </select><br>

    <label for="num2">Enter Number 2:</label>
    <input type="number" name="num2" id="num2" step="any" required><br>

    <input type="submit" value="Calculate">
  </form>

  <?php
  // Display the result if available
  if ($result !== '') {
    echo "<p><strong>Result:</strong> $result</p>";
  }
  ?>

</body>

</html>