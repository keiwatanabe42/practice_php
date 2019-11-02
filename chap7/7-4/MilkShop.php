// ミルクの作成日と賞味期限を表示する
<br>
<?php // Milkクラスのインスタンスを作ってプロパティを調べる
require_once("Milk.php");

$myMilk = new Milk();
echo "作成日：", $myMilk -> theDate, "\n"; 
echo "<br>";
echo "期限日：", $myMilk -> limitDate;
?>