<!DOCTYPE html>
<html lang = "ja">
<head>
    <meta charset = "utf-8">
    <title>スライダー</title>
    <link href = "../../css/style.css" rel = "stylesheet">
</head>
<body>
<div>

<?php // 関数
// 文字エンコードチェック関数
function checkEncode(array $data){
    $result = true;
    // 配列から値を取り出す
    foreach($data as $key => $value){
        // 取り出した値も配列の場合、文字列に変換して連結
        if(is_array($value)){
            $value = implode("", $value);
        }
        // エンコーディングチェック
        if(!mb_check_encoding($value)){
            $result = false;
            break;
        }
    }
    return $result;
}

// HTMLタグ等のエスケープ（XSS対策）
function escape($data, $charset = "utf-8"){
    // 配列の場合、再帰によりすベてエスケープさせる
    if(is_array($data)){
        return array_map(__METHOD__, $data);
    }else{
        return htmlspecialchars($data, ENT_QUOTES, $charset);
    }
}
?>

<?php
if(!checkEncode($_POST)){
    $encoding = mb_internal_encoding();
    $err = "Encoding Error! The expected encoding is". $encoding;
    exit($err);
}

$_POST = escape($_POST);

?>
<?php
$error = [];
// 甘さのレベル
$min = 1;
$max = 5;
// スライダーのパラメータ取得
if(isset($_POST["taste"])){
    $taste = $_POST["taste"];
    // 値が整数かつ指定範囲内かチェックする
    $isTaste = ctype_digit($taste) && ($taste >= $min) && ($taste <= $max);
    if(!$isTaste){
        $error[] = "甘みの値にエラーがありました。";
        $taste = $min;
    }
}else{
    // POSTされてない場合
    $taste = round($min + $max) / 2; // スライダーの位置を中心に設定
    $isTaste = true;
}
?>

    <form method = "POST" action = "<?php echo escape($_SERVER['PHP_SELF']); ?>" >
        <ul>
            <li><span>甘味</span>
                <input type = "range" name = "taste" min = "1" max = "5" step = "1" value = "<?php echo $taste; ?>">
            </li>
            <li>
                <input type = "submit" value = "送信する">
            </li>
        </ul>
    </form>

    <!-- 甘味が入力されている場合、表示する -->
    <?php
    if($isTaste){
        $tasteArray = ["甘い", "少し甘い", "普通", "少し苦い", "苦い"];
        echo "<HR>";
        echo "甘味は「{$taste}.{$tasteArray[$taste-1]}」です。";
    }
    ?>
    
    <?php
    // エラー表示
    if(count($error) > 0){
        echo "<HR>";
        echo '<span name = "error">', implode("<br>", $error), '</span>';
    }
    ?>
</div>
</body>
</html>