<!DOCTYPE html>
<html>
<head>
  <title>Sorting</title>
</head>
<body>
  <h1>Sorting</h1>
  <form method="post">
    <label for="num">숫자 개수:</label>
    <input type="number" id="num" name="num" required min="1" max="100">
    <br>
    <button type="submit">생성</button>
  </form>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $n = $_POST["num"];

   
    for ($i = 0; $i < $n; $i++) {
      $dada[$i] = rand(10, 100);
    }

 
    echo "생성된 결과: ";
    for ($i = 0; $i < $n; $i++) {
      echo $dada[$i] . " ";
    }

 
    sort($dada);

   
    echo "<br>오름차순: ";
    for ($i = 0; $i < $n; $i++) {
      echo $dada[$i] . " ";
    }
  }
  ?>
</body>
</html>
