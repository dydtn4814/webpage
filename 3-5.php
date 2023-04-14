<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>달력 출력하기</title>
</head>
<style>
       

        table {
            border-collapse: collapse;
            width: 100%;
            border:2px solid blue;
        }
        th, td {
            border: 1px solid blue;
            text-align: right;
            padding: 10px;
        }
        th {
            background-color: #eee;
        }
        .month-year {
            text-align: center;
            font-size: 20px;
            margin-bottom: 20px;
        }
        tr:first-child th{
            background:rgb(2, 206, 210);
            color: black;
            text-align:center;
        }
        tr:nth-child(2) th{
        background-color: rgb(253, 211, 210);
        }        
        td:nth-child(7) {
        color: black;
        }
        tr:nth-child(n+3) td {
        text-align: left;
        }
        
    </style>
<body>
    <form method="get">
        <label for="year">년도:</label>
        <input type="number" name="year" id="year" min="1900" max="2100" required>
        <br>
        <label for="month">월:</label>
        <input type="number" name="month" id="month" min="1" max="12" required>
        <br>
        <button type="submit">달력 출력하기</button>
    </form>

    <?php
    if (isset($_GET['year']) && isset($_GET['month'])) {
        // 사용자가 입력한 년도와 월을 변수에 저장합니다.
        $year = $_GET['year'];
        $month = $_GET['month'];
        // 해당 월의 첫 번째 날짜와 마지막 날짜를 계산합니다.
        $firstDay = mktime(0, 0, 0, $month, 1, $year);
        $lastDay = mktime(0, 0, 0, $month + 1, 0, $year);

        // 첫 번째 날짜의 요일을 계산합니다.
        $firstDayOfWeek = date('w', $firstDay);

        // 테이블을 출력합니다.
        echo "<table>\n";
        echo"<tr><th colspan=7>$year 년 $month 월 달력</tr></th>";
        echo "<tr><th>일</th><th>월</th><th>화</th><th>수</th><th>목</th><th>금</th><th>토</th></tr>\n";
        echo "<tr>";

        // 첫 번째 날짜 이전의 빈 칸을 출력합니다.
        for ($i = 0; $i < $firstDayOfWeek; $i++) {
            echo "<td></td>";
        }

        // 날짜를 출력합니다.
        $currentDay = 1;
        while ($currentDay <= date('j', $lastDay)) {
            // 요일이 일요일이면 새로운 행을 시작합니다.
            if (date('w', mktime(0, 0, 0, $month, $currentDay, $year)) == 0) {
                echo "</tr>\n<tr>";
            }
            echo "<td>$currentDay</td>";
            $currentDay++;
        }

        // 마지막 날짜 이후의 빈 칸을 출력합니다.
        for ($i = date('w', $lastDay) + 1; $i < 7; $i++) {
            echo "<td></td>";
        }

        echo "</tr>\n";
        echo "</table>";
    }
    ?>
</body>
</html>
