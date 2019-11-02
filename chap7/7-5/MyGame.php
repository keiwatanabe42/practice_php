<?php
require_once("GameBook.php");
?>

<?php
class MyGame{
    public $hitPoint;

    function __construct($point = 50){
        $this -> newGame($point);
    }

    // 持ち点$pointで新しいゲームを開始するメソッド
    public function newGame($point){
        $this -> hitPoint = $point;
    }
    // ゲーム開始
    public function play(){
        $num = mt_rand(0, 50);
        if($num % 2 == 0){
            echo "{$num}ポイント増えました！", "\n";
            echo "<br>";
            $this -> hitPoint += $num;
        }else{
            echo "{$num}ポイント減りました。", "\n";
            echo "<br>";
            $this -> hitPoint -= $num;
        }
        
        echo "現在{$this -> hitPoint}ポイント", "\n";
        echo "<br>";
    }

    // 勝敗のチェック
    public function isAlive():bool{
        return ($this -> hitPoint > 0);
    }
}
// ?>