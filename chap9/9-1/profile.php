<!DOCTYPE html>
<html>
<head>
    <meta charset = "utf-8">
    <title>ラジオボタン</title>
    <link href = "../../css/style.css" rel = "stylesheet">
</head>
<body>
<div>
<?php
require_once("../../chap8/8-2/util.php");
?>

<?php
// 文字エンコードチェック
if(!cken($_POST)){
    $encoding = mb_internal_encoding();
    $err = "Encoding Error! The expected encoding is ". $encoding;
    exit($err);
}
?>

<?php
// XSS対策
$_POST = es($_POST);
?>

<?php
// 入力チェック
$errList = [];
// 性別
if(isset($_POST["sex"])){
    $sexValues = ["男性", "女性"];
    $isSex = in_array($_POST['sex'], $sexValues);
    if($isSex){
        $sex = $_POST['sex'];
    }else{
        $sex = "error";
        $errList[] = "「性別」に入力エラーがありました。";
    }
}else{
    $isSex = false;
    $sex = "男性";
}
?>

<?php
// 結婚
if(isset($_POST['marrige'])){
    $marrigeValues = ["独身", "既婚", "同棲中"];
    $isMarrige = in_array($_POST['marrige'], $marrigeValues);
    if($isMarrige){
        $marrige = $_POST['marrige'];
    }else{
        $marrige = "error";
        $errList[] = "「結婚」に入力エラーがありました。";
    }
}else{
    $isMarrige = false;
    $marrige = "独身";
}
?>

<?php
// 初期値でチェックするかどうか
function checked($value, $question){
    // 配列の時、値が含まれていればTRUE
    if(is_array($question)){
        $isChecked = in_array($value, $question);
    }else{
        $isChecked = ($value === $question);
    }

    if($isChecked){
        echo "checked";
    }else{
        echo "";
    }
}
?>

    <form method = "POST" action = "<?php echo es($_SERVER['PHP_SELF']); ?>">
        <ul>
            <li><span>性別：</span>
                <label><input type = "radio" name = "sex" value = "男性" <?php checked("男性", $sex); ?>>男性</label>
                <label><input type = "radio" name = "sex" value = "女性" <?php checked("女性", $sex); ?>>女性</label>
            </li>
            <li><span>結婚：</span>
                <label><input type = "radio" name = "marrige" value = "独身" <?php checked("独身", $marrige); ?>>独身</label>
                <label><input type = "radio" name = "marrige" value = "既婚" <?php checked("既婚", $marrige); ?>>既婚</label>
                <label><input type = "radio" name = "marrige" value = "同棲中" <?php checked("同棲中", $marrige); ?>>同棲中</label>
            </li>
            <li>
                <input type = "submit" value = "送信する">
            </li>
        </ul>
    </form>

    <?php
    $isSubmitted = $isSex && $isMarrige;
    if($isSubmitted){
        echo "<HR>";
        echo "あなたは「{$sex}、{$marrige}」です。";
    }
    ?>
    <?php
    // エラー表示
    if(count($errList) > 0){
        echo "<HR>";
        echo '<span class = "error">', implode("<br>", $errList), '</span>';
    }
    ?>
</div>
</body>
</html>