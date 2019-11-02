<!DOCTYPE html>
<html lang = "ja">
<head>
    <meta charset = "UTF-8">
    <title>年月日プルダウンメニュー</title>
    <link href = "../../css/style.css" rel = "stylesheet">
</head>
<body>
<div>

<?php
function checkEncode(array $data){
    $result = true;
    foreach($data as $key => $value){
        if(is_array($value)){
            $value = implode($value);
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
if(!checkEncode($_POST)){
    $encoding = mb_internal_encoding();
    $err = "Encoding Error! The expected encoding is ". $encoding;
    exit($err);
}

$_POST = escape($_POST);
?>

<?php
// default value
$error = [];

$selectedYear = date('Y');
$selectedMonth = date('n');
$selectedDay = date('j');

// POSTされた値の取得
if(isset($_POST['year']) && isset($_POST['month']) && isset($_POST['day'])){
    $selectedYear = $_POST['year'];
    $selectedMonth = $_POST['month'];
    $selectedDay = $_POST['day'];
    // 値チェック
    $isDate = checkdate($selectedMonth, $selectedDay, $selectedYear);
    if($isDate){
        $dateString = $selectedYear. "-". $selectedMonth. "-". $selectedDay;
        $dateObj = new DateTime($dateString);
    }else{
        $error[] = "日付として正しくありません。";
    }
        
}else{
    // POSTなし
    $isDate = false; 
}
?>

<?php
// 年のプルダウンメニューを作成する関数
function yearPulldown(){
    global $selectedYear;
    $nowYear = date('Y');
    $startYear = $nowYear - 15;
    $endYear = $nowYear + 15;
    
    echo '<select name = "year">', "\n";
    for($i = $startYear; $i <= $endYear; $i++){
        if($i == $selectedYear){
            echo "<option value = {$i} selected>{$i}</option>", "\n";
        }else{
            echo "<option value = {$i}>{$i}</option>", "\n";
        }
    }
    echo "</select>\n";
}

// 月のプルダウンメニュー作成
function monthPulldown(){
    global $selectedMonth;
    $startMonth = 1;
    $endMonth = 12;
    echo '<select name = "month">', "\n";
    for($i = $startMonth; $i <= $endMonth; $i++){
        if($i == $selectedMonth){
            echo "<option value = {$i} selected>{$i}</option>\n";
        }else{
            echo "<option value = {$i}>{$i}</option>\n";
        }
    }
    echo "</select>\n";
}

// 日にちのプルダウンメニュー作成関数
function dayPulldown(){
    global $selectedDay;
    $startDay = 1;
    $endDay = 31;
    echo '<select name = "day">', "\n";
    for($i = $startDay; $i <= $endDay; $i++){
        if($i == $selectedDay){
            echo "<option value = {$i} selected>{$i}</option>\n";
        }else{
            echo "<option value = {$i}>{$i}</option>\n";
        }
    }
    echo "</select>";
}
?>

    <form method = "POST" action = "<?php echo escape($_SERVER['PHP_SELF']); ?>" >
        <ul>
            <li>
                <?php echo yearPulldown() ?>年
                <?php echo monthPulldown() ?>月
                <?php echo dayPulldown() ?>日
            </li>

            <li>
                <input type = "submit" value = "送信する">
        </ul>
    </form>

    <!-- 結果表示 -->
<?php
if($isDate){
    $date_fmt = $dateObj -> format("Y年n月j日");
    $week = ["日", "月", "火", "水", "木", "金", "土"];
    $w = $dateObj -> format('w');
    $dayOfTheWeek = $week[$w];   
    echo "<HR>";
    echo "{$date_fmt}は、{$dayOfTheWeek}曜日です。";
}

if(count($error) > 0){
    echo "<HR>";
    echo implode("<br>", $error);
}
?>
</div>
</body>
</html>