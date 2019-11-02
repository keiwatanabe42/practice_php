<?php
class Staff2{
    // クラスプロパティ：クラス自身のプロパティ、クラスメンバー
    public static $piggyBank = 0;
    // クラスメソッド
    public static function deposit(int $yen){
        self::$piggyBank += $yen;
    }

    // インスタンスプロパティ
    public $name;
    public $age;

    // constructor
    function __construct($name, $age){
        $this -> name = $name;
        $this -> age = $age;
    }

    // instance method 1 
    public function hello(){
        if(is_null($this -> name)){
            echo "こんにちは\n";
        }else{
            echo "こんにちは{$this -> name}です！\n";
        }
    }

    // instance method 2
    public function latePenalty(){
        // static method
        self::deposit(1000);
    }
}
// ?>