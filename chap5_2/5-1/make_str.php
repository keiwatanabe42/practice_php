<?php // ""で囲まれた文字列
$size = "M";
$price = 1200;
// into message
$msg = "$size size, $price, yen.";

echo $msg;
?>

<br><br>
<?php // 変数を{}で囲む

$msg = "{$size} size, {$price} yen.";

echo $msg;
?>

<br><br>
<?php // $記号を表示する
$price = 117;
echo "今日のレートは\$1 = {$price}円です。";
?>

<br><br>
<?php // シングルクォートで囲まれた文字列
$msg = '$size size, $price yen';

echo $msg;
?>

<br><br>
<?php // シングルクォートでのエスケープシーケンス
$msg = 'It is Y\'s Room';

echo $msg;
?>

<br><br>
<?php // シングルクォート内でダブルクォートを使用する
$msg = 'It is "Y\'s Room".';

echo $msg;
?>

<br><br>
<?php // ヒアドキュメント：文字列を任意の識別子を用いることで複数行にわたって記述できる
$msg = <<< 'EOD'
これから一緒に”PHP $version"を学びましょう。
本気出すよ。
EOD;

echo $msg;
?>