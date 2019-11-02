<!DOCTYPE html>
<html lang = "ja">
<head>
    <meta charset = "utf-8">
    <title>ラジオボタン</title>
    <link href = "../../css/style.css" rel = "stylesheet">
</head>
<body>
<div>

<?php
// 文字コードチェック関数
function checkEncode(array $data){
    $result = true;
    foreach($data as $key => $value){
        if(is_array($value)){
            $value = implode("", $value);
        }

        if(!mb_check_encoding($value)){
            $result = false;
            break;
        }
    }
    return $result;
}

// HTMLタグ等のエスケープ関数　XSS対策
function escape($data, $charset = "utf-8"){
    if(is_array($data)){
        return array_map(__METHOD__, $data);
    }else{
        return htmlspecialchars($data, ENT_QUOTES, $charset);
    }
}

?>

<?php
// 文字エンコードチェック
if(!checkEncode($_POST)){
    $encoding = mb_special_encoding();
    $err = "Encoding Error! The expected encoding is ". $encoding;
    exit($err);
}

// XSS対策
$_POST = escape($_POST);
var_dump($_POST);
?>

<?php
$errList = [];

// 食事入力チェック
if(isSet($_POST["meal"])){
    $meals = ["朝食", "夕食"];
    // 配列に入っていない（チェックされていない値を抽出する）
    $diffMeals = array_diff($_POST["meal"], $meals);
    // $mealsに含まれていない値がなければOK
    if(count($diffMeals) == 0){
        $mealChecked = $_POST["meal"];
    }else{
        $mealChecked = [];
        $errList[] = "「食事」に入力エラーがありました。";
    }
}else{
    $mealChecked = [];
}
?>

<?php
// ツアー内容チェック
if(isSet($_POST["tour"])){
    $tours = ["カヌー", "MTB", "トレラン"];
    // $toursにない値が入ってる場合、取り出す
    $diffTours = array_diff($_POST["tour"], $tours);
    // $toursの値以外がなければOK
    if(count($diffTours) == 0){
        $tourChecked = $_POST["tour"];
    }else{
        $tourChecked = [];
        $errList[] = "「ツアー」に入力エラーがありました。";
    }
}else{
    // POSTされてない場合なので
    $tourChecked = [];
}
?>

<?php
    // 初期表示でチェックマークをつけるか
    function checked($value, $data){
        if(is_array($data)){
            $isChecked = in_array($value, $data);
        }else{
            $isChecked = ($value === $data);
        }
        
        if($isChecked){
            echo "checked";
        }else{
            echo "";
        }
    }
?>

    <form method = "POST" action = "<?php echo escape($_SERVER['PHP_SELF']); ?>">
        <ul>
            <li><span>食事：</span>
                <label><input type = "checkbox" name = "meal[]" value = "朝食" <?php  echo checked("朝食", $mealChecked);?>>朝食</label>
                <label><input type = "checkbox" name = "meal[]" value = "夕食" <?php  echo checked("夕食", $mealChecked);?>>夕食</label>
            </li>
            <li><span>ツアー：</span>
                <label><input type = "checkbox" name = "tour[]" value = "カヌー" <?php echo checked("カヌー", $tourChecked);?>>カヌー</label>
                <label><input type = "checkbox" name = "tour[]" value = "MTB" <?php echo checked("MTB", $tourChecked);?>>MTB</label>
                <label><input type = "checkbox" name = "tour[]" value = "トレラン" <?php echo checked("トレラン", $tourChecked); ?>>トレラン</label>
            </li>

            <li><input type = "submit" value = "送信する"></li>
        </ul>
    </form>

    <?php
    // フォーム結果表示
    $isSelected = count($mealChecked) > 0 || count($tourChecked) > 0;
    if($isSelected){
        echo "<HR>";
        echo "お食事：", implode("と", $mealChecked), "<br>";
        echo "ツアー：", implode("と", $tourChecked), "<br>";
    }else{
        echo "<HR>";
        echo "選択されているものはありません。";
    }
?>

<?php
// エラー内容表示
    if(count($errList) > 0){
        echo "<HR>";
        echo '<span class = "error">', implode("<br>", $errList), "</span>";
    }
?>

</div>
</body>
</html>