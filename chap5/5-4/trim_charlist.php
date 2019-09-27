<?php # p129 trim() の第2引数で取り除く文字を指定して削除している
$msg = "　東京都千代田区　\n\n";
# \x20:スペース \t 水平タブ \n Line Feed \r carrige return \0 null文字 \v 垂直タブ
$result = trim($msg, "\x20\t\n\r\0\v　"); # 第2引数：除去する文字を指定
echo "処理前：\n";
echo "[", $msg, "]\n";
echo  "処理後：\n";
echo "[", $result, "]\n";
?>