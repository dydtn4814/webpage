<!DOCTYPE html>
<html>
<head>
  <title>fiv</title>
</head>
<body>
  <h1>fiv</h1>
  <form method="post">
    <label for="num">정수입력:</label>
    <input type="number" id="num" name="num" required min="1" max="100">
    <br>
    <button type="submit">생성</button>
  </form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $n = $_POST["num"];
    if ($n < 1 || $n > 100) {
      echo "숫자 개수는 1부터 100까지 입력할 수 있습니다.";
      exit;
    }
 

    $fib = array(1, 1);
    for ($i = 2; $i < $n; $i++) {
      $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
    }
 
    // 출력
    echo "<table>";
    echo "<tr><th>i</th><th>fi</th><th>fi+1</th><th>fi+1/fi</th></tr>";
    for ($i = 0; $i < $n; $i++) {
      echo "<tr>";
      echo "<td>" . ($i + 1) . "</td>";
      echo "<td>" . $fib[$i] . "</td>";
      if (isset($fib[$i + 1])) {
        echo "<td>" . $fib[$i + 1] . "</td>";
        if ($fib[$i] != 0) {
          $ratio = $fib[$i + 1] / $fib[$i];
          echo "<td>" . number_format($ratio, 6) . "</td>";
        } else {
          echo "<td>-</td>";
        }
      } else {
        echo "<td>-</td>";
        echo "<td>-</td>";
      }
      echo "</tr>";
    }
    echo "</table>";
  }
?>
</body>
</html>
