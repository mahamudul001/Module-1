<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Even or Odd Checker</title>
</head>

<body>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST["number"];

    if ($number % 2 == 0) {
      $message = "$number is even.";
    } else {
      $message = "$number is odd.";
    }
  }
  ?>

  <h1>Even or Odd Checker</h1>
  <form method="post" action="">
    <label for="">Give a Number: </label>
    <input type="number" id="number" name="number" required>

    <input type="submit" value="Check">
  </form>

  <?php
  //display the result message
  if (isset($message)) {
    echo "<p><strong>Result: </strong> $message</p>";
  }
  ?>

</body>

</html>