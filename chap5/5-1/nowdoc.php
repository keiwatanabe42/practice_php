<?php # p112 NowDoc構文 識別子をシングルクォートで囲む。変数を展開しないが、エスケープシーケンス不要で長文向き
$version = 7;
$msg = <<< 'EOD'
これから一緒に "PHP $version" を学びましょう。
本気出すよ。
EOD;

# NowDocを表示する。
echo $msg;
?>