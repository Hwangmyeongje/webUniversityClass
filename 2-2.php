<!DOCTYPE html>
<html>
<head>
    <title>숫자 맞추기 게임</title>
</head>
<body>
    <h1>숫자 맞추기 게임</h1>

    <form method="post" action="">
        <label for="guess">1부터 10 사이의 숫자를 추측하세요:</label>
        <input type="number" id="guess" name="guess" min="1" max="10">
        <button type="submit">확인</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $guess = $_POST['guess'];
        playGame($guess);
    }

    function playGame($guess) {
        $randomNumber = rand(1, 10);

        echo "<h2>게임 결과</h2>";
        echo "<p>당신의 추측: $guess</p>";
        echo "<p>정답: $randomNumber</p>";

        if ($guess == $randomNumber) {
            echo "<p>정답입니다! 축하합니다!</p>";
        } else {
            echo "<p>틀렸습니다. 다시 시도하세요.</p>";
        }
        sleep(3);
    }
    ?>
</body>
</html>
