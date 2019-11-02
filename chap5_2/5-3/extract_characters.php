<?php // 文字数を数える
// 文字数によって料金を計算して文字数と値段を文字列で返す
function calcPrice($str){
    $price = 3000;
    $countStr = mb_strlen($str);
    // １１文字目から１文字あたり100円増し
    if($countStr > 10){
        $price += 100 * ($countStr - 10);
    }
    // 3桁区切り
    $price = number_format($price);
    $result = "{$countStr}文字{$price}円";
    return $result;
}
?>

<!-- HTML 形式-->
<!DOCTYPE html>
<html>
<head>
    <meta charset = "utf-8">
    <title> 文字数によって料金を計算する</title>
</head>
<body>
<?php
$msg1 = "Hello World!";
$msg2 = "ハローワールド";
echo calcPrice($msg1);
echo "<br>\n";
echo calcPrice($msg2);
?>
</body>
</html>

<br><br>
<?php // mb_substr() 文字列を切り出す
$msg = "吾輩は猫である。名前はまだない。";

echo mb_strlen($msg), "\n";
echo "<br>";
echo mb_substr($msg, 4);
echo "<br>";
echo mb_substr($msg, 4, 10);
echo "<br>";
echo mb_substr($msg, -6);
?>

<br><br>
<?php // 最後の文字を削除する
$msg = "春はあけぼの。";
$msg = mb_substr($msg, 0, -1);

echo $msg;
?>

<br><br>
<?php // substr(),strlen() : 半角英数字のみの場合、左記の関数が使える
$id = "ABC1X239JP";

echo substr($id, 4), "<br>\n";
echo substr($id, 5, 3), "<br>\n";
echo substr($id, -2);
?>

<br><br>
<?php // １文字ずつ順に取り出す方法
$id = "Peace";
$length = strlen($id);
// １文字ずつ取り出す
for($i = 0; $i < $length; $i++){
    $char = $id{$i};
    echo $i, "-", $char, "<br>\n";
}
?>