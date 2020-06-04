<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <title></title>
</head> 
      <body>
    
<?php

$age = 14;
$height = 140;

if(($age <= 10) && ($height <= 140) || ($age >= 65)) {
    $enteryFee = 60;
}   elseif (($age >= 15) && ($age <= 25)) {
    $enteryFee = 80;
}
    else {  
    $enteryFee = 120;
}

?>
<p> Because of your age <?= $age ?> and height <?= $height ?>, so u gona pay for the entry fee <?= $enteryFee ?> Czk. </p>

      </body>
</html>