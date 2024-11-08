
<?php
// ゲームの設定
$players = ["Player 1", "Player 2"]; // プレイヤー名
$boardSize = 20; // ボードのマスの数
$finishLine = $boardSize - 1; // ゴール位置

// 各プレイヤーの位置を初期化
$playerPositions = [0, 0]; // プレイヤーの位置（0番目がPlayer 1、1番目がPlayer 2）

// サイコロを振る関数
function rollDice() {
    return rand(1, 6); // サイコロ（1〜6）を振る
}

// ゲームの実行
function playGame($players, $playerPositions, $boardSize, $finishLine) {
    $turn = 0;
    while (true) {
        // プレイヤーの順番
        $currentPlayer = $players[$turn % 2]; // Player 1 と Player 2 を交互に
        $currentPlayerIndex = $turn % 2;
        
        // サイコロを振る
        $diceRoll = rollDice();
        $newPosition = $playerPositions[$currentPlayerIndex] + $diceRoll;

        // ゴールに到達した場合
        if ($newPosition >= $finishLine) {
            echo $currentPlayer . " ゴール!\n";
            break;
        }

        // プレイヤーの新しい位置
        $playerPositions[$currentPlayerIndex] = $newPosition;

        // ゲームの状態を表示
        echo $currentPlayer . " は " . $diceRoll . " 進むよ! 今は " . $newPosition . "にいるよ.\n";
        echo $players[0] . " は " . $playerPositions[0] . "にいるよ.\n";
        echo $players[1] . " は " . $playerPositions[1] . "にいるよ.\n";
        echo "-----------------------------\n";

        // 次のターン
        $turn++;
        sleep(1); // ゲームの進行を少し遅くする（1秒）
    }
}

// ゲーム開始
echo "Game Start!\n";
playGame($players, $playerPositions, $boardSize, $finishLine);
?>

