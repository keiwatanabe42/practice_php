<?php # 合計求めて５引く
$num1 = 80;
$num2 = 40;
$num3 = 5;
$total = $num1 + $num2;
$result = $total - $num3;

echo "合計 {$total} 、最終結果 {$result}";
?>

<br>
<?php # ４人で料金割り勘
$price = 5470;
$shortbyMoney = $price % 4;
$perPerson = ($price - $shortbyMoney) / 4;

echo "一人 {$perPerson} 円、不足 {$shortbyMoney} 円";
?>

<br>
<?php #剰余は演算対象を整数にして演算される
$ans = 11.6 % 4.1;
var_dump($ans);
?>

<br>
<?php #暗黙のCAST
$person = "3人" + "2人";
$price = "500円" * $person;
$price *= "1.08 消費税";

echo "料金{$price}、{$person}";
?>

