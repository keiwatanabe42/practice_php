// MyClassクラスでどちらのトレイトが使われるか試す
<br>
<?php
require_once("MyClass.php");
?>

<?php
$myClass = new MyClass();

echo $myClass -> hello();
echo "<br>";
echo $myClass -> dayOfTheWeek();
echo "<br>";
echo $myClass -> TaroHello();
echo "<br>";
echo $myClass -> HanaHello();
?>