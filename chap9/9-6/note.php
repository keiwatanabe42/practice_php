<!DOCTYPE html>
<html lang = "ja">
<head>
    <meta charset = "UTF-8">
    <title>テキストエリア</title>
    <link href = "../../css/style.css" rel = "stylesheet">
</head>
<body>
<div>

<?php // 関数
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

function escape($data, $charset = "UTF-8"){
    if(is_array($data)){
        return array_map(__METHOD__, $data);
    }
    return htmlspecialchars($data, ENT_QUOTES, $charset);
}
?>

<?php
// エンコードチェック
if(!checkEncode($_POST)){
    $encoding = mb_internal_encoding();
    $err = "Encoding Error! The expected encoding is ". $encoding;
    exit($err);
}
?>

<?php
// 入力チェック
if(isset($_POST["note"])){
    $note = $_POST["note"];
    // HTML,PHPタグを削除
    $note = strip_tags($note);
    // 最大１５０文字取得する
    $note = mb_substr($note, 0, 150);
    // HTMLエスケープ
    $note = escape($note);
}else{
    $note = "";
}
?>
    <!-- 入力フォーム作成 -->
    <form method = "POST" action = "<?php escape($_SERVER['PHP_SELF']) ?>" >
        <ul>
            <li><span>コメント:</span>
                <textarea name = "note" cols = "30" rows = "5" maxlength = "150" placeholder = "コメントをどうぞ"><?php echo $note; ?></textarea>
            </li>
            <li>
                <input type = "submit" value = "送信する">
            </li>
        </ul>
    </form>

    <!-- 入力結果出力 -->
<?php
$length = mb_strlen($note);
if($length > 0){
    echo "<HR>";
    // nl2br($str is_xhtml) : 改行文字の前に<br>を挿入する関数
    $note_br = nl2br($note, false);
    echo $note_br;
}
?>
</div>
</body>
</html>