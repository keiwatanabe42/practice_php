<?php # 160 サブパターンを配列$matchesから抜き出す。
$pattern = "/2013([A-F])-(..)/";
$subject = "2012A-sx, 2013F-fx, 2013G-fx, 2013A-dx, 2015a-sx";
$result = preg_match_all($pattern, $subject, $matches);
if($result === false){
    echo "エラーです。：", preg_last_error();
}else if($result == 0){
    echo "マッチした型式はありません。";
}else{
    $all = implode(", ", $matches[0]);
    $model = implode(", ", $matches[1]);
    $type = implode(", ", $matches[2]);
    echo "見つかった型式：", $all, "\n";
    echo "モデル：", $model, "\n";
    echo "タイプ：", $type, "\n";
}
?>