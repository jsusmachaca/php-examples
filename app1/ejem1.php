<?php
$name = "Jesus";
$isDev = true;
$age = 21;
$isYoung = $age < 25;
const BRO = 'SI PUES BRO';
?>

<!-- <?php if ($isYoung) : ?>
    <h1>Eres joven bro</h1>
<?php elseif ($age > 50) : ?>
    <h1>Jajaja Viejo e mierda</h1>
<?php else : ?>
    <h1>HHHHHH</h1>
<?php endif; ?> -->


<h1>Name: <?= $name; ?></h1>
<h1>Is DEV: <?= $isDev; ?></h1>
<h1>Age: <?= $age; ?></h1>
<h1>Bro: <?= BRO; ?></h1>
<h1>Is young: <?= $isYoung; ?></h1>
