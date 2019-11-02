<?php
require_once("WorldRule.php");

class MyClass2 implements WorldRule{
    // インターフェースで指定されているメソッド
    public function hello(){
        echo "こんにちは！", "\n";
    }

    // MyClass2独自のメソッド
    public function thanks(){
        echo "ありがとう", "\n";
    }
}
// ?>
