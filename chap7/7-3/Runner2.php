<?php
require_once("Player.php");
?>

<?php

class Runner2 extends Player{

    public $age;

    function __construct($name, $age){
        parent::__construct($name);
        $this -> age = $age;
    }

    // オーバーライドする
    public function who(){
        echo "{$this -> name},{$this -> age}歳です。\n";
    }

    public function play(){
        echo "{$this -> name}が走る！\n";
    }
}
// ?>