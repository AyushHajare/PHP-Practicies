<?php
$data = "demo";
$pwd = crypt($data,18);

$val3 = rand(10,15); //create salt (random value)
$pwd2 = crypt($data, $val3);

echo $pwd."<br>";
echo $pwd2;
?>