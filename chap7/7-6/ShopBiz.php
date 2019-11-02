<?php

abstract class ShopBiz{
    // 抽象メソッド
    abstract function thanks();

    // インスタンスメンバー
    public $sales = 0;

    public function sell($price){
        // is_numeric:変数が数字または数値形式の文字列の場合true
        if(is_numeric($price)){
            echo "{$price}円です。";
            $this -> sales += $price;
        }
        // 抽象メソッド実行（ただし、実装は子クラス）
        $this -> thanks();
    }
}
// ?>