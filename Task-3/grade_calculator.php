<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Grade Calculator</title>
</head>

<body>

  <?php
  function calculateGrade($average)
  {
    if ($average >= 90) {
      return "A";
    } elseif ($average >= 80) {
      return "B";
    } elseif ($average >= 70) {
      return "C";
    } elseif ($average >= 60) {
      return "D";
    } else {
      return "F";
    }
  }

  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $score1 = $_POST["score1"];
    $score2 = $_POST["score2"];
    $score3 = $_POST["score3"];

    //Calculate The average score
    $average = ($score1 + $score2 + $score3) / 3;

    //calculate the curresponding letter grade
    $letter_grade = CalculateGrade($average);
  }

  ?>

  <h1>Grade Calculator</h1>
  <form method="post" action="">
    <label for="score1">Enter Test Score 1: </label>
    <input type="number" id="score1" name="score1" required><br>

    <label for="score2">Enter Test Score 2: </label>
    <input type="number" id="score2" name="score2" required><br>

    <label for="score3">Enter Test Score 3: </label>
    <input type="number" id="score3" name="score3" required><br>

    <input type="submit" value="Calculate Grate">
  </form>

  <?php
  //Display the average and curresponding Grade
  if (isset($average) && isset($letter_grade)) {
    echo "<p><strong>Average Score: </stroung>$average</p>";
    echo "<p><strong>Letter Grade: </strong>$letter_grade</p>";
  }

  ?>

</body>

</html>