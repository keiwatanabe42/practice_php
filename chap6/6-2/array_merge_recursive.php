<?php # 181 array_merge_recursive() recursive : 再帰的
$a = ["a" => 1, "b" => 2, "c" => 3];
$b = ["b" => 40, "d" => 50];
# 連想配列を連結する
$result = array_merge_recursive($a, $b);
# 被ってるkeyについては多重配列にして両方残す
print_r($result);