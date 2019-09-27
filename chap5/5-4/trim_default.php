<?php # p128 trim() で不要な空白や開業を取り除く
$msg = "\tHello World!!    \n\n";
$result = trim($msg);
echo "処理前：\n";
echo "[", $msg, "]\n";
echo "処理後：\n";
echo "[", $result, "]\n";
?>