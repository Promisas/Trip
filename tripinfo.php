<?php
require 'calc.php';

session_start();



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/tailwind.css">
    <link rel="stylesheet" href="./src/styles.css">
    <title>Trip</title>
</head>

<body>
<div class="h-screen" style="background: url('img/wall.jpg')">
<div class="flex items-center justify-center h-screen">

<div class="space-y-3 bg-gray-100 p-10 rounded-md bg-opacity-90 uppercase font-bold">

    <p>Keliones atstumas: <?php echo $distance ?> km</p>
    <p><?php include 'km.php'; ?></p>
    <p><?php include 'cost.php'; ?></p>
    <p><?php include 'season.php'; ?></p>
   
    </div>
    <div class="space-y-3 bg-gray-100 p-10 rounded-md bg-opacity-90 uppercase font-bold ml-20"><p><?php include 'list.php'; ?></p> </div>

    </div>
    
    </div>


</body>

</html>