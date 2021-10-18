<?php
require 'Wilder.php';
require 'WilderFiveMonth.php';
require 'Alternant.php';
require 'Room.php';
namespace App;

use App\WilderFiveMonth as Genius;
use App\Wilder;
use App\Alternant;

$alex = new Genius('Alex');
$jonathan = new Alternant('Jonathan', 'STOIK');

$alex->study();
$jonathan->study();

$room = new Room();
$room->setWilder($alex);

var_dump(Wilder::class);