<?php
$search = array("p", "e");
$subject = "a piece of the apple pie";

$result = str_ireplace($search, "?", $subject, $count);
echo "置換前：{$subject}", "\n";
echo "置換後：{$result}", "\n";
echo "個数；{$count}";
?>