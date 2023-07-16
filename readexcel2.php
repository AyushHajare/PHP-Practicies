<?php
$list =  "Hajare, Ayush ";
$file = fopen("test.csv","w");
fputcsv($file,explode(',',$list));
fclose($file); 
?>