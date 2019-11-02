<?php // Playerクラスの子クラスとしてSoccerクラスを作る

require_once("Player.php");

class Soccer extends player{
    // サッカーでシュートした人の名前を出力するメソッド
    public function play(){
        echo "{$this -> name}がシュート！\n";
    }
}
// ?>