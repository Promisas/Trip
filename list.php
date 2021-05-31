<?php
require 'calc.php';


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
<p>Sezono įranga: </p>
<div class="font-medium">
<?php

$pavasaris = array('Vanduo', 'Drabužiai','Patogi avalynė','Miegmaišis','Kilimėlis', 'Maisto įrankiai', 'Peilis', 'Prožėktorius', 'kepurė', 'akiniai nuo saulės', 'palapinė'    );
$vasara = array('Vanduo', 'Drabužiai','Patogi avalynė','Miegmaišis','Kilimėlis', 'Maisto įrankiai', 'Peilis', 'Prožėktorius', 'kepurė', 'akiniai nuo saulės', 'palapinė');
$ruduo = array('Vanduo', 'Skėtis', 'Šiltesni Rūbai','Kilimėlis', 'Maisto įrankiai', 'Peilis', 'Prožėktorius', 'Šilta avalynė');
$ziema = array('Vanduo', 'Šiltesni Rūbai','Kilimėlis', 'Maisto įrankiai', 'Peilis', 'Prožėktorius', 'Šilta avalynė');


if ($list == 0) {
    foreach ($pavasaris as $value) {
        echo $value . "<br>";
    }
    
} else if ($list == 1) {
    foreach ($pavasaris as $value) {
        echo $value . "<br>";
    }
}else if ($list == 2) {
    foreach ($pavasaris as $value) {
        echo $value . "<br>";
    }
}else {
    foreach ($pavasaris as $value) {
        echo $value . "<br>";
    }
}




?></div>
<form action="tripinfo" method="post">
<!-- <button type="submit" name="btn">Sezono įranga</button>
<p> <?php  if (isset($_POST['btn'])) {
    echo 'rrere';
}   else {
    echo "ere";
}      ?> </p> -->
</form>
</body>
</html>
