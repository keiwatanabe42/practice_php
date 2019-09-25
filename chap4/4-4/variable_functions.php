<?php # p103 可変変数　String変数から同名のユーザ定義関数を呼び出せる
    function hello($who){
        echo "{$who} さん、こんにちは！";
    }

    function bye($who){
        echo "{$who} さん、さよなら！";
    }

    # 実行する関数名
    $msg = "bye";
    # 引数のfunction名が存在するかチェック
    if (function_exists($msg)){
        $msg("金太郎"); #functionを呼び出し、"金太郎"を引数で渡す
    }
?>