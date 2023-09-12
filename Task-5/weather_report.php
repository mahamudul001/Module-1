<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=, initial-scale=1.0">
  <title>Weather Report</title>
</head>

<body>
  <?php
  $temperature = 20;

  if ($temperature <= 0) {
    $message = "It's freezing!";
  } elseif ($temperature > 0 && $temperature <= 15) {
    $message = "It's warm.";
  } elseif ($temperature > 15 && $temperature <= 25) {
    $message = "It's cool.";
  } else {
    $message = "It's hot!.";
  }
  ?>

  <h1>Weather Report</h1>
  <p><strong>Temperature: </strong><?php echo $temperature; ?>°C</p>
  <p><strong>Weather: </strong><?php echo $message; ?></p>

</body>

</html>