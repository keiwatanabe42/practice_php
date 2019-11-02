<?php // 文字列の比較
// 引数の曜日が休日かどうかを出力する関数
function holiday($dayOfTheWeek){
    // holiday is saturday or sunday 
    if(($dayOfTheWeek == "Saturday") || ($dayOfTheWeek == "Sunday")){
        echo "{$dayOfTheWeek} is holiday!";
    }else{
        echo "{$dayOfTheWeek} is not holiday...";
    }
}

// execute
holiday("Friday");
echo "<br>";
holiday("Saturday");
echo "<br>";
holiday("Sunday");
?>

<br><br>
<?php // 文字列と数値の比較　文字列は数値に自動的にキャストされる
// ２つの引数が一致するかチェックし、結果を出力する関数
function check($a, $b){
    if($a == $b){
        echo "{$a}と{$b}は同じ。\n";
    }else{
        echo "{$a}と{$b}は異なる。\n";
    }
}

// execute
check("7cm", "7cm"); // same
echo "<br>";
check("7km", "7cm"); // diffrence
echo "<br>";
check("7人", 7); // same
echo "<br>";
check("PHP7", 7); // difference 0 == 7
echo "<br>";
check("七", 0); // 先頭が数値でない、文字列数値が含まれていない場合、0に変換される。
?>

<br><br>
<?php // 厳密な比較
// 厳密に引数の値を比較して出力する関数
function check2($a, $b){
    if($a === $b){
        echo "{$a}と{$b}は同じ\n";
    }else{
        echo "{$a}と{$b}は異なる\n";
    }
}

// execute
check2("7cm", "7cm");
echo "<br>";
check2("7km", "7cm");
echo "<br>";
check2("7人", 7);
echo "<br>";
check2("PHP7", 7);
echo "<br>";
check2("七", 0);
?>

<br><br>
<?php // 英単語をアルファベット順で比較する
function compare($a, $b){
    if($a < $b){
        echo "ordered by asc {$a},{$b}";
    }else if($a > $b){
        echo "ordered by asc {$b},{$a}";
    }else if($a == $b){
        echo "{$a} = {$b}";
    }
}

// execute
compare("apple", "apple");
echo "<br>";
compare("apple", "beatles");
echo "<br>";
compare("apple", "android");
echo "<br>";
compare("apple", "APPLE"); // 大文字と小文字は大文字が先になる
?>

<br><br>
<?php // 文字列にキャストして比較する場合
// execute
compare("120", 99); // 99, 120
echo "<br>";
compare("A5", 0); // =
echo "<br>";
$num = 99;
compare("A5", (string)$num); // 99 , A5
?>

<br><br>
<?php // strcmp($a, $b) : 引数が数値であっても文字列にキャストして比較する関数 $a < $b : -, $a = $b : 0, $a > $b : +
// 文字列にキャストして比較する関数
function castCompare($a, $b){
    $result = strcmp($a, $b);
    if($result < 0){
        echo "order {$a}, {$b}";
    }else if($result > 0){
        echo "order {$b}, {$a}";
    }else if($result === 0){
        echo "{$a} = {$b}";
    }
}

// execute
castCompare("123", 99); // 123 99
echo "<br>";
castCompare("A123", 99); // 99 A123
echo "<br>";
castCompare("009", 99); // 009 99
?>

<br><br>
<?php // strcasecmp() : 大文字小文字区別せずに比較する
$id1 = "AB12R";
$id2 = "ab12r";

$result = strcasecmp($id1, $id2);

echo "compare {$id1} with {$id2},";
if($result == 0){
    echo "both ID is equal";
}else{
    echo "Both ID is not equal";
}
?>

<br><br>
<?php // strncmp($a, $b, $length) : $a,$b を指定した長さの部分で一致するか比較する関数

function pieceOfCompare($target){
    $compareStr = "ABC";
    // $targetの前方が”ABC"の場合、一致
    $result = strncasecmp($compareStr, $target, strlen($compareStr));
    echo "compare {$compareStr} with a piece of the {$target}";
    if($result == 0){
        echo "is equal";
    }else{
        echo "is not equal";
    }
}

// execute
$id1 = "ABCR70";
$id2 = "xbcM65";
$id3 = "AbcW71";
$id4 = "xABC68";
pieceOfCompare($id1);
echo "<br>";
pieceOfCompare($id2);
echo "<br>";
pieceOfCompare($id3);
echo "<br>";
pieceOfCompare($id4);
?>