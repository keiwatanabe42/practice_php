<?php // strpos(),mb_strpos() : str position。文字列を検索しても際しよに見つかったインデックスを返す関数。見つからなかった場合はfalseで返す。
// targetの文字列から、指定した文字列を検索して見つかったインデックを表示する関数
function searchStr($target, $str){
    $result = mb_strpos($target, $str);
    if($result === false){
        echo "「{$str}」は「{$target}」には含まれていません。\n";
    }else{
        echo "「{$str}」は「{$target}」の{$result}文字目にあります。\n";
    }
}

// execute
searchStr("東京都渋谷区神南", "渋谷");
echo "<br>";
searchStr("東京都渋谷区神南", "新宿");
echo "<br>";
searchStr("PHP, Swift, C++", "PHP");
echo "<br>";
searchStr("PHP, Swift, C++", "Python");
?>

<br><br>
<?php // mb_substr_count() : 検索した文字列がいくつ含まれているかを返す関数。
// 成績表によって再試験かどうか判定する関数
function judgeGrade($grade){
    $result = mb_substr_count($grade, "不可");
    if($result >= 3){
        echo "不可が{$result}個あるので再試験です。\n";
    }else{
        echo "合格です。\n";
    }
}

// execute
judgeGrade("優,不可,良,可,優,可");
echo "<br>";
judgeGrade("可,優,不可,不可,良,不可");
echo "<br>";
judgeGrade("不可,可,不可,不可,良,不可");
echo "<br>";
judgeGrade("可,良,良,不可,良,不可");
?>

<br><br>
<?php // mb_strstr($target, $str)), mb_stristr() : 見つかった位置から後ろの文字列を取り出す $target内の$strから後ろの文字列を抽出
// 特定の文字列以降の文字列を取り出す関数
function pickup($target, $pickupStr){
    $result = mb_stristr($target, $pickupStr);
    if($result === false){
        echo "(not found)\n";
    }else{
        echo $result, "\n";
    }
}

// execute
pickup("東京都港区赤坂2-3-4", "赤坂");
echo "<br>";
pickup("東京都渋谷区神南1-1-1", "渋谷区");
echo "<br>";
pickup("東京都渋谷区道玄坂5-5-5", "原宿");
?>

<br><br>
<?php // str_replace($a, $b, $str), str_ireplace() : 検索して置換する関数 $strの$aを$bへ置換
$str = "吾輩は猫である。";

echo str_replace("猫", "犬", $str), "\n";
echo "<br>";
echo str_replace("猫", "馬", $str), "\n";
echo "<br>";
echo $str;
?>

<br><br>
<?php // str_repace($a, $b, $str, $count) : 第4引数に変数を設定すると置換した個数を数えられる
$str = "Apple Pie";
$result = str_ireplace("p", "?", $str, $count);

echo "置換前：", $str, "\n";
echo "<br>";
echo "置換後：", $result, "\n";
echo "<br>";
echo "個数：", $count, "\n";
?>

<br><br>
<?php // 検索文字、置換文字が複数ある場合、配列で指定する。
// p と e を変換対象にする
$search = array("p", "e");
$str = "a piece of the apple pie";

$result = str_replace($search, "?", $str, $count);
echo "置換前：", $str, "\n";
echo "<br>";
echo "置換後：", $result, "\n";
echo "<br>";
echo "個数：", $count;
?>

<br><br>
<?php // 複数の検索文字をそれぞれ別の文字に置換する。
$search = array("suzuki", "age 25");
$toReplace = array("A", "age x");

$msg = "担当はsuzukiさんです。age 25";
$result = str_ireplace($search, $toReplace, $msg);

echo "置換前：", $msg, "\n";
echo "<br>";
echo "置換後：", $result, "\n";
?>
