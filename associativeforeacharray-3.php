<!DOCTYPE html>
<html>
    <body>
    <?php
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    foreach($age as $x=> $xvalue){
        echo "Name " . $x . ", age " .$xvalue;
        echo "<br>";
    }
    
    ?>
    </body>
</html>