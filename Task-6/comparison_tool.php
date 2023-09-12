<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Comparison Tool</title>
</head>

<body>

  <?php
  //initialize variable
  $num1 = '';
  $num2 = '';
  $result = '';

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];

    //use ternary operator
    $result = ($num1 > $num2) ? $num1 : $num2;
  }
  ?>

  <h1>Comparison Tool</h1>

  <form method="post" action="">
    <label for="num1">Enter Number 1: </label>
    <input type="number" name="num1" id="num1">

    <label for="num2">Enter Number 2: </label>
    <input type="number" name="num2" id="num2">

    <input type="submit" value="Compare">
  </form>

  <?php
  //display the results
  if ($result !== '') {
    echo "<p></p>Lerger Number:<strong> $result</strong>";
  }
  ?>

</body>

</html>