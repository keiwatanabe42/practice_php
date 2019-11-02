<!DOCTYPE html>
<html lang = "ja">
<head>
    <meta charset = "utf-8">
    <title>計算ページ</title>
    <link href = "../../css/style.css" rel = "stylesheet">
</head>
<body>
<div>
<?php
require_once("../8-2/util.php");

// 文字エンコードチェック
if(!cken($_POST)){
    $encoding = mb_internal_encoding();
    $err = "Encoding Error! The expected Encoding is ". $encoding;
    exit($err);
}

// XSS対策
$_POST = es($_POST);
?>

<?php
// POSTされた値を入力チェック
if(isset($_POST["mile"])){
    $isNum = is_numeric($_POST["mile"]);
    if($isNum){
        $mile = $_POST["mile"];
        $error = "";
    }else{
        $mile = "";
        $error = '<span class = "mile">←数値を入力してください</span>';
    }
}else{
    // POSTされた値がない場合（初めてページを開いた場合)
    $isNum = false;
    $mile = "";
    $error = "";
}

?>
    <form method = "POST" action = "<?php echo es($_SERVER['PHP_SELF']) ?>">
        <ul>
            <li>
                <label>マイルをkmに換算：
                <input type = "text" name = "mile" value = "<?php echo $mile ?>">
                </label>
                <!--エラー表示-->
                <?php echo $error ?>
            </li>
            <li><input type = "submit" value = "計算する"></li>
        </ul>
    </form>

    <?php
    // $mileが数値であれば計算結果を表示する
    if($isNum){
        echo "<HR>";
        $kilometer = $mile * 1.609344;
        echo "{$mile}マイルは{$kilometer}kmです。";
    }
    ?>

</div>
</body>
</html>