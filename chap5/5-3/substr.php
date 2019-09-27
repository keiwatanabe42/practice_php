<?php # p123 半角英数字のみの場合、substr(),strlen()が使用可能
$id = "ABC1X239JP";
echo substr($id, 4), "\n";
echo substr($id, 5, 3), "\n";
echo substr($id, -2);
?>