<?php # 159 preg_match_all()でマッチしたすべてのパターンを取り出す
$pattern = "/201[2-5](AX|FX)/i";
$subject = "2011AX, 2012Fx, 2012AF, 2013FX, 2015ax. 2016Fx";
$result = preg_match_all($pattern, $subject, $matches);

if($result === false){
    echo "エラー：", preg_last_error();
}else if($result == 0){
    echo "マッチした型式はありません。";
}else{
    echo implode("、", $matches[0]); # implode() 配列の要素を文字列によって連結する
}
?>