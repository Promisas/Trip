<?php

require 'calc.php';





$people = ($food + $rest);

$all = $people * $count;




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
<p>Kiekvienam dalyviui reikėtų turėti po <?php echo $people ?> € dienai. <br> Maistui <?php echo $food?> € ir nakvynei <?php echo $rest?> €</p>
<p>Iš viso suma sudarytų: <?php echo $all ?> € </p>

</body>
</html>

