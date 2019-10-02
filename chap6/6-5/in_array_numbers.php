<?php # 195-196 合格した番号を検索、表示する in_array()
# check numbers
$numList = [1008, 1234, 1301];
# pass numbers
$numbers = [1301, 1206, 1008, 1214];

# pass check
function checkNumber($no){
    global $numbers; # (関数の外で定義している)変数のグローバル化
    # pass numbersに含まれていれば合格
    if(in_array($no, $numbers)){
        echo "{$no}番は合格です。";
    }else{
        echo "{$no}番は見つかりません。";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset = "utf-8">
    <title>配列を検索する</title>
</head>
<body>
<?php
# 結果リスト
echo "<ol>\n";
# $numListの値をすべてチェック
foreach($numList as $value){
    echo "<li>", checkNumber($value), "</li>\n";
}
echo "</ol>\n";
?>
</body>
</html>