<?php

include'includes/class-calculate.php';

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$calculate = $_POST['calculate'];

$calculator = new calculateNow($num1, $num2, $calculate);

echo $calculator->calcMethod();