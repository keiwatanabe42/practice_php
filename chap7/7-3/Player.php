<?php

class Player{
    public $name;

    function __construct($name = '名無し'){
        $this -> name = $name;
    }

    // Stringにキャストされた時に返すメソッド（マジックメソッド)
    public function __toString(){
        return $this -> name;
    }

    // 名前を出力するメソッド
    public function who(){
        echo "{$this -> name}です。\n";
    }
}
// ?>