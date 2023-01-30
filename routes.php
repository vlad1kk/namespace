<?php

require_once('models/Apple.php');
require_once('models/AppleiPad.php');
require_once('models/Xiaomi.php');

use Tablets\Apple as iPad; 

$appleiPad = new iPad();
$apple = new Apple();
$xiaomi = new \Xiaomi();