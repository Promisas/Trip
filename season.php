<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Metų laikotarpis: <?php
$today = new DateTime();

$spring = new DateTime('March 20');
$summer = new DateTime('June 20');
$fall = new DateTime('September 22');
$winter = new DateTime('December 21');


if ($today >= $spring && $today < $summer) {
    echo 'Pavasaris ';
    $list = 0;
} else if ($today >= $summer && $today < $fall) {
    echo 'Vasara';
    $list = 1;
} else if ($today >= $fall && $today < $winter) {
    echo 'Ruduo';
    $list = 2;
} else {
    echo 'Žiema';
    $list = 3;
}

?></p>
</body>
</html>
