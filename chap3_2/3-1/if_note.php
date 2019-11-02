<!DOCTYPE html>
<html>
<head>
    <meta charset = "UTF-8">
    <title>コロンで区切ったif構文</title>
</head>
<body>
<?php
$age = 25;
?>

<?php if($age >= 15): ?>
    15歳以下の料金は500円です。<br>
<?php elseif($age <= 19): ?>
    16際から19歳は1000円です。<br>
<?php else: ?>
    20歳以上は1500円です。<br>
<?php endif; ?>
</body>
</html>