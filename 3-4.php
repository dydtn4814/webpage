<!DOCTYPE html>
<html>
<?php
// function to calculate the area of a rectangular shape
function calculateRectangleArea($length, $width) {
  return $length * $width;
}

// function to calculate the area of a triangular shape
function calculatetriangle($length, $width) {
  return 0.5 * $length * $width;
}

// function to calculate the area of a cylindrical shape
function calculateCircle($radius){
  return pi() * $radius * $radius;
}
function calculaterectangularparallelepiped($length, $width,$height) {
    return $length * $width*$height;
}
function calculatecylinder($radius,$height){
    return pi() * $radius * $radius*$height;
}
// function to calculate the area of a spherical shape
function calculatesphere($radius, $height) {
  return 4/3* pi() * $radius * $radius*$radius;
}


// check if form is submitted
if(isset($_POST['submit'])) {
  // get form data
  $shape = $_POST['shape'];
  $length = $_POST['length'];
  $width = $_POST['width'];
  $height = $_POST['height'];
  $radius = $_POST['radius'];

  // calculate area based on shape selected
  switch($shape) {
    case 'rectangle':
      $area = calculateRectangleArea($length, $width);
      break;
    case 'triangle':
      $area = calculatetriangle($length, $width);
      break;
    case 'circle':
      $area = calculateCircle($radius);
      break;
    case 'rectangularparallelepiped':
      $area = calculaterectangularparallelepiped($length, $width,$height);
      break;
    case 'sphere':
        $area = calculatesphere($radius,$height);
        break;
    case 'cylinder':
        $area = calculatecylinder($radius,$height);
        break;
    default:
      $area = 0;
      break;
  }

  // display area
  echo "The area of the $shape is $area.";
}
?>

<!-- HTML form to input data -->
<form method="post">
  <label for="shape">Select shape:</label>
  <select name="shape">
    <option value="rectangle">Rectangular</option>
    <option value="triangle">Triangular</option>
    <option value="circle">circle</option>
    <option value="sphere">Spherical</option>
    <option value="cylinder">cylindrical</option>
    <option value="rectangularparallelepiped">rectangularparallelepiped</option>
  </select>
  <br>

  <label for="length">Length:</label>
  <input type="number" name="length"><br>

  <label for="width">Width:</label>
  <input type="number" name="width"><br>

  <label for="height">Height:</label>
  <input type="number" name="height"><br>

  <label for="radius">Radius:</label>
  <input type="number" name="radius"><br>

  <input type="submit" name="submit" value="Calculate area">
</form>

</html>  
