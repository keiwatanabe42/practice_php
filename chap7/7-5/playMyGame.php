<?php
require_once("MyGame.php");
?>

<?php
// MyGameクラスのインスタンス生成
$myPlayer = new MyGame();
// ゲームを10回プレイ
for($i = 0; $i < 10; $i++){
    $myPlayer -> play();
    if(!$myPlayer -> isAlive()){
        break;
    }
}

echo "ゲーム終了", "\n";
?>