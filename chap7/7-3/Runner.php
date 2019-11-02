<?php
require_once("Player.php");

class Runner extends Player{
    //property
    public $age;

    //constrictor
    function __construct($name, $age){
        //親クラスのコンストラクタを呼び出す
        parent::__construct($name);
        
        $this -> age = $age;
    }

    //method 誰が走るかを文字列出力
    public function play(){
        echo "{$this -> name}が走る！";
    }
}
// ?>