<!DOCTYPE html>
<html lang = "ja">
<head>
    <meta charset = "utf-8">
    <title>リストボックス</title>
    <link href = "../../css/style.css" rel = "stylesheet">
</head>
<body>
<div>

<?php // 関数
// 文字エンコードチェック関数
function checkEncode(array $data){
    $result = true;
    // リクエストパラメータを取り出す
    foreach($data as $key => $value){
        // パラメータが配列の場合、文字列に変換して結合
        if(is_array($value)){
            $value = implode("", $value);
        }
        // 文字コードチェック
        //　１つでも指定エンコードでなかった場合、breakして結果をfalseにする
        if(!mb_check_encoding($value)){
            $result = false;
            break;
        }
    }
    return $result;
}

// HTMLタグエスケープなどXSS対策関数
function escape($data, $charset = "utf-8"){
    // データが複数ある場合、再帰呼び出し
    if(is_array($data)){
        return array_map(__METHOD__, $data);
    }else{
        return htmlspecialchars($data, ENT_QUOTES, $charset);
    }

}

// selectetedのいちを選択した位置に固定する関数
function selected($value, $selection){
    // 配列の場合
    if(is_array($selection)){
        $isSelected = in_array($value, $selection);
    }else{
        $isSelected = ($value === $selection);
    }
    // selectedを選択
    if($isSelected){
        echo "selected";
    }else{
        echo "";
    }
}
?>

<?php
// 文字エンコードチェック
if(!checkEncode($_POST)){
    $encoding = mb_internal_encoding();
    $errMsg = "Encoding Error! The expected encoding is ". $encoding;
    exit($errMsg);
}
?>

<?php
// HTMLエスケープ（XSS対策）
$_POST = escape($_POST);
?>

<?php
$error = [];
// 選択されている食事を調べる
if(isset($_POST["meal"])){
    // 値の種類
    $mealValue = ["朝食", "夕食"];
    $diffMealArray = array_diff($_POST["meal"], $mealValue);
    // 指定値以外のものが入っていない場合
    if(count($diffMealArray) == 0){
        $meal = $_POST["meal"];
    }else{
        $meal = [];
        $error[] = "「食事」に入力エラーがありました。";
    }
}else{
    // POSTなし
    $meal = [];
}
?>

<?php
// ツアーチェック
if(isset($_POST["tour"])){
    //ツアー種類
    $tourValues = ["カヌー", "MTB", "トレラン"];
    $diffTours = array_diff($_POST["tour"], $tourValues);
    //  ツアー種類以外のものが混じってない場合
    if(count($diffTours) == 0){
        $tour = $_POST["tour"];
    }else{
        $error[] = "「ツアー」に入力エラーがありました。";
    }
}else{
    // POSTなし
    $tour = [];
}

?>
    <!-- 入力フォーム -->
    <form method = "POST" action = "<?php escape($_SERVER['PHP_SELF']); ?>">
        <ul>
            <li><span>食事</span>
                <select name = "meal[]" size = "2" multiple>
                    <option value = "朝食" <?php selected("朝食", $meal); ?>>朝食</option>
                    <option value = "夕食" <?php selected("夕食", $meal); ?>>夕食</option>
                </select>
            </li>
            <li><span>ツアー</span>
                <select name = "tour[]" size = "3" multiple>
                    <option value = "カヌー" <?php selected("カヌー", $tour); ?>>カヌー</option>
                    <option value = "MTB" <?php selected("MTB", $tour); ?>>MTB</option>
                    <option value = "トレラン" <?php selected("トレラン", $tour); ?>>トレラン</option>
                </select>
            </li>
            <li><input type = "submit" value = "送信する"></li>
        </ul>
    </form>

    <!-- フォーム結果表示 -->
    <?php
        $isSelected = count($meal) > 0 || count($tour) > 0;
        if($isSelected){
            echo "<HR>";
            echo "お食事：", implode("と", $meal), "<br>";
            echo "ツアー：", implode("と", $tour), "<br>";
        }else{
            echo "<HR>";
            echo "選択されているものはありません。";
        }
    ?>

    <!-- エラー表示 -->
    <?php
    if(count($error) > 0){
        echo "<HR>";
        echo implode("<br>", $error);
    }
    ?>
</div>
</body>
</html>
