<?php 
// 数値を２倍にする
function double($value){
    return $value * 2;
}

$num = 25;
$result = double($num);

echo $num, "の２倍：", $result;
?>

<br>
<?php
// 料金を計算する
function price($cost, $number){
    $sum = $cost * $number;
    $fee = 250; // 手数料
    // 料金が5000円異常の場合、送料無料
    if($sum < 5000){
        $sum += $fee;
    }
    return $sum;
}

$result = price(1000, 4);
echo $result,PHP_EOL;
echo "<br>", PHP_EOL;
$result = price(1000, 5);
echo $result;

?>

<br>
<?php // 関数を途中で中断させる
// 割り勘で一人当たりの金額を算出
function splitTheBill($price, $person){
    if($person <= 0){
        return;
    }
    $shortage = $price % $person;
    $pricePerPerson = ($price - $shortage) / $person;
    echo "一人当たりの金額 {$pricePerPerson} 円。";
    echo "<br>", PHP_EOL;
}

splitTheBill(5000, 5);
splitTheBill(5000, 0);
splitTheBill(5000, 2);
?>

<br>
<?php // 初期値のある引数
// 宿泊料金を計算する関数
function hotelFee($rank, $days = 1){
    switch($rank){
        case "A":
        $price = 15000 * $days;
        break;

        case "B":
        $price = 12000 * $days;
        break;

        default:
        $price = 8000 * $days;
        break;
    }
    return $price;
}

$price1 = hotelFee("B", 2);
$price2 = hotelFee("A");

echo "金額1は {$price1} 円";
echo "<br>", PHP_EOL;
echo "金額2は {$price2} 円";
?>

<br>
<?php // 引数なしでユーザ定義関数を呼び出す
$price3 = hotelFee(NULL);

echo "金額3は {$price3} 円";
?>

<br>
<?php // 引数の個数を指定しない
// チーム名とメンバーの表示
function team($teamName, ...$members){
    print_r($teamName);
    echo "<br>\n";
    print_r($members);
}

team("peach", "sato", "tanaka", "kato");
?>

<br>
<?php // membersをStringで返す implode
// チーム名、メンバーを文字列連結した状態で返す関数
function team2($teamName, ...$members){
    $memberList = implode(", ", $members);
    return "{$teamName} : {$memberList}";
}

$team1 = team2("Peach", "sato", "tanaka", "katou");
$team2 = team2("cabos", "hiroshi", "kieko");

echo $team1;
echo "<br>\n";
echo $team2;
?>

<br>
<?php // 引数の型指定
// 引数の値を2倍にして返す
function double2(int $value){
    return 2 * $value;
}
$num = 10.8;
$result = double2($num);

echo "{$num}の2倍は{$result}";
?>

<br>
<?php // 戻り値の型指定
function double3(float $value) : int{
    return 2 * $value;
}

$num = 10.8;
$result = double3($num);

echo "{$num}の2倍は{$result}";
?>