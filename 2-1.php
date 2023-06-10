<!DOCTYPE html>
<html>
<head>
    <title>가위바위보 게임</title>
</head>
<body>
    <h1>가위바위보 게임</h1>

    <form method="post" action="">
        <label for="userChoice">가위, 바위, 보 중 하나를 선택하세요:</label>
        <input type="radio" id="rock" name="userChoice" value="바위">
        <label for="rock">바위</label>
        <input type="radio" id="paper" name="userChoice" value="보">
        <label for="paper">보</label>
        <input type="radio" id="scissors" name="userChoice" value="가위">
        <label for="scissors">가위</label>
        <button type="submit">게임 시작</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $userChoice = $_POST['userChoice'];
        playGame($userChoice);
    }

    function playGame($userChoice) {
        $options = array('가위', '바위', '보');
        $computerChoice = $options[rand(0, 2)];
        $result = '';

        echo "<h2>게임 결과</h2>";
        echo "<p>사용자: $userChoice</p>";
        echo "<p>컴퓨터: $computerChoice</p>";

        if ($userChoice == $computerChoice) {
            $result = "비겼습니다!";
        } elseif (($userChoice == '가위' && $computerChoice == '보') ||
                  ($userChoice == '바위' && $computerChoice == '가위') ||
                  ($userChoice == '보' && $computerChoice == '바위')) {
            $result = "사용자가 이겼습니다!";
        } else {
            $result = "컴퓨터가 이겼습니다!";
        }

        echo "<p>$result</p>";

        // 결과를 유지하기 위해 3초 동안 일시 중지합니다.
        sleep(3);
    }
    ?>
</body>
</html>
