<?php # p121 mb_strlen() でも時数を出力する
# 文字数によって料金を計算する
function price($str){
    $kakaku = 3000;
    # 文字数チェック
    $length = mb_strlen($str);
    # 11文字目以降、1文字あたり+100円
    if ($length > 10){
        $kakaku += ($length - 10) * 100;
    }
    # 3桁区切り
    $kakaku = number_format($kakaku);
    $result = "{$length} 文字 {$kakaku} 円";
    
    return $result;
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset = "utf-8">
<title>文字数によって料金を計算する</title>
</head>
<body>
<pre>
<?php
# 試す
$msg1 = "Hello World!";
$msg2 = "ハローワールド";

echo price($msg1);
echo "\n";
echo price($msg2);
?>
</pre>
</body>
</html>