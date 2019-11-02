<!DOCTYPE html>
<html lang = "ja">
<head>
    <meta charset = "UTF-8">
    <title>日付フィールド</title>
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
    }else{
        return htmlspecialchars($data, ENT_QUOTES, $charset);
    }
}
?>

<?php
$error = [];
// 日付を取得
// オブジェクトを使うので、値が空だとエラーになるため、emptyを使う
if(!empty($_POST["date"])){
    $postDate = trim($_POST['date']);
    // 半角にする
    $postDate = mb_convert_kana($postDate, "as");
    // 日付形式のパターン２つ（yyyy-mm--dd）（yyyy/mm/dd）
    $pattern1 = "/^\d{4}-\d{1,2}-\d{1,2}$/u";
    $pattern2 = "#^\d{4}\/\d{1,2}\/\d{1,2}$#u";
    // パターンにマッチするか実行
    $datePattern1 = preg_match($pattern1, $postDate);
    $datePattern2 = preg_match($pattern2, $postDate);
    // 年月日を配列にする
    // パターン１
    if($datePattern1){
        $dateArray = explode("-", $postDate);
    }
    // パターン２
    if($datePattern2){
        $dateArray = explode("/", $postDate);
    }
    // パターンにマッチした場合、年月日を各変数に格納
    if($datePattern1 || $datePattern2){
        $year = $dateArray[0];
        $month = $dateArray[1];
        $day = $dateArray[2];
        //日付の妥当性チェック
        $isDate = checkdate($month, $day, $year);
        // 妥当な場合、DateTimeクラスのコンストラクタに$postDateを渡す
        if($isDate){
            $dateObj = new DateTime($postDate);
        }else{
            $error[] = "日付として正しくありません。";
        }
    }else{
        // パターンにマッチしなかった場合
        // 今日の日付で例を表示する
        $today = new DateTime();
        $today1 = $today -> format("Y-n-j");
        $today2 = $today -> format("Y/n/j");

        $error[] = "日付は次のどちらかの形式で入力してください。<br>{$today1} または {$today2}";
        $isDate = false;
    }
}else{
    $isDate = false;
    $postDate = "";
}
?>
    <form method = "POST" action = "<?php echo escape($_SERVER['PHP_SELF']) ?>">
        <ul>
            <li><span>日付を選ぶ：</span>
                <input type = "date" name = "date" value = "<?php echo $postDate ?>" >
            </li>
            <li>
                <input type = "submit" value = "送信する">
        </ul>
    </form>

    <!-- 結果表示 -->
<?php
if($isDate){
    //曜日取得
    $date = $dateObj -> format("Y年m月d日");
    $w = (int)$dateObj -> format('w');
    $week = ["日", "月", "火", "水", "木", "金", "土"];
    $dayOfWeek = $week[$w];
    echo "<HR>";
    echo "{$date}は、{$dayOfWeek}曜日です。";
}

if(count($error) > 0){
    echo "<HR>";
    echo implode("<br>", $error);
}
?>
</div>
</body>
</html>