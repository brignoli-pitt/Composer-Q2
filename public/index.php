<?php
require '../src/Hello.php';
use App\Hello;

$message = new Hello();
echo $message->talk();