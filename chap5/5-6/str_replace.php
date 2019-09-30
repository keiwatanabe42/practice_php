<?php # p141 文字列置換
$subject = "吾輩は猫である";
echo str_replace("猫", "犬", $subject), "\n";
echo str_replace("猫", "馬", $subject), "\n";
echo $subject;
?>