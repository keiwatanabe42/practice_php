<!DOCTYPE html>
<html lang = "ja">
<head>
    <meta charset = "utf-8">
    <title>プルダウンメニュー</title>
    <link href = "../../css/style.css" rel = "stylesheet">
</head>
<body>
<div>

<?php
// POST(GET)された値の文字エンコードチェック
function checkEncode($data){
    $result = true;
    // パラメータごとにエンコードチェック
    foreach($data as $key => $value){
        // 値が複数（配列の場合）   
        if(is_array($value)){
            $value = implode("", $data);
        }
        // 文字エンコードチェック
        if(!mb_check_encoding($value)){
            $result = false;
            break;
        }
    }
    return $result;
}
?>

<?php
// XSS対策で文字エスケープ
function escape($data, $charset = "utf-8"){
    // 値一つ一つについてエスケープ実行
    if(is_array($data)){
        return array_map(__METHOD__, $data);
    }else{
        return htmlspecialchars($data, ENT_QUOTES, $charset);
    }
}
?>

<?php
// POST送信後のプルダウンメニューをキープする関数
function selected($data, $selected){
    //　配列かチェック
    if(is_array($selected)){
        $isSelected = in_array($data, $selected);
    }else{
        $isSelected = ($data === $selected);
    }
    // 選択されている値に[selected]を出力
    if($isSelected){
        echo "selected";
    }else{
        echo "";
    }
}
?>
<?php
// 文字コードチェック
if(!checkEncode($_POST)){
    $encoding = mb_internal_encoding();
    $err = "Encoding Error! The expected encoding is ". $encoding;
    exit($err);
}
?>

<?php
// XSS対策する
$_POST = escape($_POST);
?>

<?php
$errList = [];
?>
<?php
// 性別入力チェック
if(isset($_POST["sex"])){
    $sexValues = ["男性", "女性"];
    $isSex = in_array($_POST["sex"], $sexValues);
    if($isSex){
        $sex = $_POST["sex"];
    }else{
        $sex = "error";
        $errList[] = "「性別」に入力エラーがありました。";
    }
}else{
    $isSex = false;
}
?>

<?php
// 結婚チェック
if(isset($_POST["marrige"])){
    // 結婚項目
    $marrigeValues = ["独身", "既婚", "同棲中"];
    $isMarrige = in_array($_POST["marrige"], $marrigeValues);
    if($isMarrige){
        $marrige = $_POST["marrige"];
    }else{
        $marrige = "error";
        $errList[] = "「結婚」に入力エラーがありました。";
    }
}else{
    $isMarigge = false;
}

?>




<form method = "POST" action = "<?php escape($_SERVER['PHP_SELF']); ?>">
    <ul>
        <li><span>性別</span>
            <select name = "sex">
                <option value = "男性" <?php selected("男性", $sex); ?>>男性</option>
                <option value = "女性" <?php selected("女性", $sex); ?>>女性</option>
            </select>
        </li>
        <li><span>結婚</span>
            <select name = marrige>
                <option value = "独身" <?php selected("独身", $marrige); ?>>独身</option>
                <option value = "既婚" <?php selected("既婚", $marrige); ?>>既婚</option>
                <option value = "同棲中" <?php selected("同棲中", $marrige); ?>>同棲中</option>
            </select>
        </li>

        <li>
            <input type = "submit" value = "送信する">
        </li>

</form>

<!-- 入力結果出力 -->
<?php
// 性別、結婚の両方入力されている場合、結果表示
if($isSex && $isMarrige){
    echo "<HR>";
    echo "あなたは「{$sex}、{$marrige}です。」";
}
?>

<?php
// 入力エラーの場合
if(count($errList) > 0){
    echo "<HR>";
    echo '<span name = "error">', implode("<br>", $errList), '</span>';
}
?>

</div>
</body>
</html>
