<?php # 185 foreach で配列から値を順に取り出す
$namelist = ["赤井一郎", "伊藤五郎", "上野信二"];

echo "<ol>", "\n";
# 配列から順に値を取り出す
foreach($namelist as $value){
    echo "<li>", $value, "</li>\n";
}
echo "</ol>\n";
?>