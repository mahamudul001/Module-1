<!DOCTYPE html>
<html>

<head>
  <title>Even/Odd Checker</title>
</head>

<body>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input from the form
    $number = $_POST["number"];

    // Check if the number is even or odd
    if ($number % 2 == 0) {
      $message = "$number is even.";
    } else {
      $message = "$number is odd.";
    }
  }
  ?>

  <h1>Even/Odd Checker</h1>

  <form method="post" action="">
    <label for="number">Enter a Number:</label>
    <input type="number" name="number" id="number" required>

    <input type="submit" value="Check">
  </form>

  <?php
  // Display the result 
  if (isset($message)) {
    echo "<p><strong>Result:</strong> $message</p>";
  }
  ?>

</body>

</html>