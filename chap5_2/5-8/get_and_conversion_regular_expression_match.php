<?php // 前のsectionでは正規表現にマッチしたかどうかのみチェックしたが、今回からはマッチしたか値を取り出す。
// preg_match($pattern, $subject, &$matches); マッチした結果は第3引数の$matchesに参照渡しされる

$pattern = "/佐.+子/u"; // = "/佐.{1,}子/u";  + : 任意の文字１回以上繰り返し
$subject = <<< "names"
佐藤有紀
佐藤ゆう子
塩田智子
杉山香
佐藤佳代子
names;

$result = preg_match($pattern, $subject, $matches);

// 正規表現の結果を出力
if($result === false){
    echo "ERROR", preg_last_error(); 
}else if($result == 0){
    echo "UNMATCH";
}else{
    echo "「", $matches[0], "」が見つかりました。";
}
?>

<br><br>
<?php // preg_matchだと正規表現にマッチした瞬間、走査を中断するが、preg_match_allを使うとマッチするすべてを$matchesに配列として格納する

$result = preg_match_all($pattern, $subject, $matches);

if($result === false){
    echo "ERROR ", preg_last_error();
}else if($result == 0){
    echo "UNMATCH";
}else{
    echo "{$result} 名マッチしました。";
    echo implode(", ", $matches[0]);
}
?>

<br><br>
<?php 
// 製品の2013のA~F型のモデルとタイプを取り出す
$pattern = "/2013([A-F])-(..)/u";

$subject = <<< "product"
2012A-sx
2013F-fx
2013A-dx
2015a-sx
product;

$result = preg_match_all($pattern, $subject, $matches);
// 結果を出力
if($result === false){
    echo "ERROR ", preg_last_error();
}else if($result == 0){
    echo "unmatch";
}else{
    $product = implode(", ", $matches[0]);
    $model = implode(", ", $matches[1]);
    $type = implode(", ", $matches[2]);
    echo "{$result}件マッチしました。<br>";
    echo "product : ", $product, "<br>";
    echo "model : ", $model, "<br>";
    echo "type : ", $type;
}
?>

<br><br>
<?php // preg_replace($pattern, $replace, $subject) : 正規表現を使って検索し、置換も行う。
// クレジットカード番号のパターンにマッチした場合、下２桁以外'*'に置換して返す関数
function checkCreditNum($creditNum){
    $pattern = "/\d{4} {0,1}\d{4} {0,1}\d{4} {0,1}\d{2}(\d{2})/u";
    $replace = "**** **** **** **$1";

    $result = preg_replace($pattern, $replace, $creditNum);
    // 結果を出力
    if(is_null($result)){
         return "ERROR ". preg_last_error();
    }else if($result == $creditNum){
        return "クレジット番号のフォーマットが違います。\n";
    }else{
        return $result;
    }
}

$creditNum1 = "1234 5678 9012 3456";
$creditNum2 = "6543210987654321";

$checkNum1 = checkCreditNum($creditNum1);
$checkNum2 = checkCreditNum($creditNum2);

echo "{$creditNum1} は次のようになります。<br>\n";
echo $checkNum1, "<br>\n";
echo "{$creditNum2} は次のようになります。<br>\n";
echo $checkNum2, "\n";
?>

<br><br>
<?php // パターンと置換文字を配列で指定することで複数置換が可能
$pattern = ["/開催日/u", "/開始時間/u"];
$replace = ["金曜日", "PM2:30"];

$subject = "次回は開催日の開始時間からです。";

$result = preg_replace($pattern, $replace, $subject);

echo $result, "\n";
?>