<?php # p144 配列を用いた置換は思わぬ置換ミスを招く可能性があるので注意
$search = ["XG", "P10"];
$replace = ["XP", "P10a"];
$subject = "XG90, XG100, F10, P15";
$result = str_replace($search, $replace, $subject);
echo "置換前；[$subject}", "\n";
echo "置換後：{$result}";
?>