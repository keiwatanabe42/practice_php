<?php
$pattern = "/佐.+子/u"; # + = {1,}：1以上の繰り返しの定義文字
# ヒアドキュメント p111
$subject = <<< "names"
佐藤有紀
佐藤ゆう子
塩田智子
杉山香
names;
# マッチング
$result = preg_match($pattern, $subject, $matches);
# 結果をチェック
if($result === false){
    echo "エラー：", preg_last_error(); # エラー番号を表示する関数
}else if ($result == 0){
    echo "マッチした値はありません。";
}else{
    echo "「", $matches[0], "」が見つかりました。";
}
?>