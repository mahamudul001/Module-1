<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Temperature Converter</title>
</head>
<body>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $temperature = $_POST["temperature"];
  $direction   = $_POST["direction"];

//perform the conversion based on the selected direction 
if($direction === "celsiusToFahrenheit") {
  $converted_temperature = ($temperature *9/5) + 32;
}elseif ($direction === "fahrenheitToCelsius") {
  $converted_temperature = ($temperature - 32) * 5/9;
}

}

?>

<h1>Temperature Converter</h1>

<form method="post" action="">
<label for="temperature">Enter Temperature:</label>
<input type="number" name="temperature" id="temperature" required>

<label for="direction">Select Conversion Direction:</label>
<select name="direction" id="direction">
<option value="celsiusToFahrenheit">Celsius To Fahrenheit</option>
<option value="fahrenheitToCelsius">Fahrenheit To Celsius</option>
</select>

<input type="submit" value="Convert">

<?php
//display the converted temperature
if(isset($converted_temperature)){
  echo "<p><strong>Converted Temperature: </stroung>$converted_temperature</p>";
}
?>

</form>
  
</body>
</html>