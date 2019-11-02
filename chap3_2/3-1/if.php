<?php
$point = 85;

if($point >= 80){
    echo "素晴らしい！";
}

echo $point, "でした。";
?>

<br>
<?php
$point = 45;
if($point >= 80){
    $msg = "素晴らしい！";
}else{
    $msg = "もう少し頑張りましょう。";
}

echo $msg, "{$point}でした。";
?>

<br>
<?php
$age = 18;

if($age < 13){
    $price = 0;
}else if(($age > 13) && ($age <= 15)){
    $price = 500;
}else if(($age > 15) && ($age <= 19)){
    $price = 1000;
}else{
    $price = 2000;
}

echo "{$age}歳なので{$price}円です。";
?>

<br>
<?php
$mathmatics = 85;
$english = 67;

if(($mathmatics >= 60) && ($english >= 60)){
    echo "おめでとう！合格です！";
}else{
    echo "残念、不合格です。";
}
?>

<br>
<?php
if(($mathmatics >= 60) || ($english >= 60)){
    echo "pass";
}else{
    echo "failure";
}
?>

<?php
$sex = "woman";
$age = 34;

if($sex == "woman"){
    if(($age >= 30) && ($age < 40)){
        echo "adopt";
    }else{
        echo "30s generation only";
    }
}else{
    echo "woman only";
}
?>