<?php # p112 ヒアドキュメント 複数行の文字列を作るとき便利
$version = 7;
$msg = <<< "EOD"
これから一緒に "PHP $version" を学びましょう。
本気出すよ。
EOD;

# ヒアドキュメントを表示する。
echo $msg;
?>