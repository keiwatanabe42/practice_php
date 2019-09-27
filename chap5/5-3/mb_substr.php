<?php # 文字列から文字を切り出す　mb_substr()
$msg = "吾輩は猫である、名前はまだない。";
echo mb_strlen($msg), "\n";
echo mb_substr($msg, 4), "\n"; # 5文字目以降表示
echo mb_substr($msg, 4, 10), "\n"; # 5文字目から10文字表示
echo mb_substr($msg, -6); # 最後から6文字表示
?>