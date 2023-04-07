<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Sum, Factorial</title>
</head>
<body>
	<form method="POST">
		<label for="n">n을 입력하세요:</label>
		<input type="number" id="n" name="n" required>
		<button type="submit">계산하기</button>
	</form>

	<?php
		if(isset($_POST['n'])) {
			$n = $_POST['n'];
			$sum = 0;
			$prod = 1;
			for($i = 1; $i <= $n; $i++) {
				echo $i . " "; // 1부터 n까지의 숫자 출력
				$sum += $i; // 전체 합 구하기
				$prod *= $i; // 전체 곱 구하기
			}
			echo "<br>1부터 {$n}까지의 숫자의 합: {$sum}<br>";
			echo "1부터 {$n}까지의 숫자의 곱: {$prod}<br>";
		}
	?>
</body>
</html>