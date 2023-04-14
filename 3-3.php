<!DOCTYPE html>
<html>
  <head>
    <title>도형 계산기</title>
  </head>
  <body>
    <h1>도형 계산기</h1>
    <form method="post" action="calc.php">
      <label for="shape">도형 선택:</label>
      <select name="shape" id="shape">
        <option value="triangle">삼각형</option>
        <option value="rectangle">직사각형</option>
        <option value="circle">원</option>
        <option value="cuboid">직육면체</option>
        <option value="cylinder">원기둥</option>
        <option value="sphere">구</option>
      </select><br>
      <div id="inputs">
      </div>
      <input type="submit" value="계산">
    </form>
    
    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $shape = $_POST['shape'];

        
        switch ($shape) {
          case 'triangle':
            $input1 = '밑변: <input type="number" name="base"><br>';
            $input2 = '높이: <input type="number" name="height"><br>';
            break;
          case 'rectangle':
            $input1 = '가로: <input type="number" name="width"><br>';
            $input2 = '세로: <input type="number" name="height"><br>';
            break;
          case 'circle':
            $input1 = '반지름: <input type="number" name="radius"><br>';
            $input2 = '';
            break;
          case 'cuboid':
            $input1 = '가로: <input type="number" name="width"><br>';
            $input2 = '세로: <input type="number" name="height"><br>';
            $input3 = '높이: <input type="number" name="depth"><br>';
            break;
          case 'cylinder':
            $input1 = '반지름: <input type="number" name="radius"><br>';
            $input2 = '높이: <input type="number" name="height"><br>';
            break;
          case 'sphere':
            $input1 = '반지름: <input type="number" name="radius"><br>';
            $input2 = '';
            break;
        }

        
        echo '<form method="post" action="calc.php">';
        echo '<input type="hidden" name="shape" value="'.$shape.'">';
        echo $input1;
        echo $input2;
        if (isset($input3)) {
            echo $input3;
            }
            echo '<input type="submit" value="계산">';
            echo '</form>';
            
            switch ($shape) {
                case 'triangle':
                    $base = $_POST['base'];
                    $height = $_POST['height'];
                    $area = $base * $height / 2;
                    echo '삼각형의 넓이: '.$area;
                    break;
                case 'rectangle':
                    $width = $_POST['width'];
                    $height = $_POST['height'];
                    $area = $width * $height;
                    echo '직사각형의 넓이: '.$area;
                    break;
                case 'circle':
                    $radius = $_POST['radius'];
                    $area = 3.14 * pow($radius, 2);
                    echo '원의 넓이: '.$area;
                    break;
                case 'cuboid':
                    $length = $_POST['length'];
                    $width = $_POST['width'];
                    $height = $_POST['height'];
                    $volume = $length * $width * $height;
                    echo '직육면체의 부피: '.$volume;
                    break;
                case 'cylinder':
                    $radius = $_POST['radius'];
                    $height = $_POST['height'];
                    $volume = 3.14 * pow($radius, 2) * $height;
                    echo '원기둥의 부피: '.$volume;
                    break;
                case 'sphere':
                    $radius = $_POST['radius'];
                    $volume = 4/3 * 3.14 * pow($radius, 3);
                    echo '구의 부피: '.$volume;
                    break;
                default:
                    echo '지원하지 않는 도형입니다.';
                    break;
            }

             }
    
  ?>
</body>
</html>  
