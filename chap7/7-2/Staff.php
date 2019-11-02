<?php // クラス定義のみ記述する
// definition class
class Staff{
    // property of instance
    public $name;
    public $age;

    // constructor
    function __construct($name, $age){
        // initialize
        $this -> name = $name;
        $this -> age = $age;
    }
    // method of instance
    public function hello(){
        if(is_null($this -> name)){
            echo "こんにちは\n";
        }else{
            echo "こんにちは、{$this -> name}です！\n";
        }
    }
} // PHPコードのみのファイルでは、終了タグを書かない方が無駄な改行などの誤動作を防げるので、省略が推奨される
// ?>