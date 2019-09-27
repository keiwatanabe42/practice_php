<?php # p122 最後の文字だけ削除　=　最後の文字以外の文字列を切り出す
$msg = "春はあけぼの。";
$msg = mb_substr($msg, 0 , -1);
echo $msg;
?>