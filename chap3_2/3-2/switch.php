<?php
$color = "blue";

switch($color){
    case "green":
        $price = 120;
        break;
    case "red":
        $price = 140;
        break;
    case "blue":
        $price = 160;
        break;
    default:
        $price = 100;
        break;
}

echo "{$color}は{$price}円";
?>

<br>
<?php // default省略
$color = "yellow";
$price = 100;

switch($color){
    case "green":
        $price = 120;
        break;
    case "red":
        $price = 140;
        break;
}
echo "{$color}は{$price}円";
?>