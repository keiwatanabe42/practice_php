<!DOCTYPE html>
<html>
<head>
    <meta charset = "UTF-8">
    <title> switch another syntax</title>
</head>
<body>
<?php
    $color = "blue";
?>

<?php switch($color): ?>
<?php case "green": ?>
    greenは120円です。 <br>
<?php break; ?>
<?php case "blue":?>
    blueは200円です。 <br>
<?php break ?>
<?php endswitch; ?>
</body>
</html>