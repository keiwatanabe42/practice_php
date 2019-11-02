<?php
// xss対策のエスケープ
function es($data, $charset = "UTF-8"){
    // $dataが配列の場合
    if(is_array($data)){
        // 再帰呼び出し __METHOD__は実行中のメソッド自身をさすマジック定数　ここではes()メソッド
        return array_map(__METHOD__, $data);
    }else{
        return htmlspecialchars($data, ENT_QUOTES, $charset);
    }
}

function cken(array $data){
    $result = true;
    // リクエストパラメータの文字エンコードチェック
    foreach($data as $key => $value){
        if(is_array($value)){
            $value = implode("", $value);
        }
        // 文字列のエンコードチェック
        if(!mb_check_encoding($value)){
            $result = false;
            break;
        }
    }
    return $result;
}
// ?>