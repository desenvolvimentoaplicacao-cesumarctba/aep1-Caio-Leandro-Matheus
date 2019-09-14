<?php

require_once __DIR__ . "/classes/animal.php";
require_once __DIR__ . "/classes/cavalo.php";
require_once __DIR__ . "/classes/leao.php";


$cavalo = new cavalo('raca');
$leao   = new leao('juba');

$cavalo->fugir();
$leao->cacar();