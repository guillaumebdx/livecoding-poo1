<?php
require 'Wilder.php';
$alex = new Wilder('Joffrey');

$alex->setLanguage('php');

for ($i=0; $i<= 10; $i++) {
    $alex->study();
}
if ($alex->isDead()) {
    echo 'GAME OVER';
}
$alex->drinkCoffee();


var_dump($alex);