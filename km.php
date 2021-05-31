<?php
require 'calc.php';


if ($distance >= 50) {

    

$dis = intval($distance/50);

if ($dis == 1) {
    $one = ' kartą';
} else {
    $one = ' kartus';
}


    

    $urest = "Reiktų gerai pailsėti kas 50km, jūsų numatytai kelionei " . $dis . $one;
    
    
} else {

    return;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
   <p> <?php echo $urest ?> </p>
   </div>
</body>
</html>