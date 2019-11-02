<?php
$theDate = new DateTime();
$isAccess = (bool)$theDate; // bool型にCAST

var_dump($isAccess);
?>