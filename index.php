<?php

require __DIR__ . '/vendor/autoload.php';

use CowSay\Cow;
use CowSay\Bear;
use CowSay\Sheep;

$bessie = new Cow('Hello, Farm!');

$bessie->setEyes('xx')
    ->setTongue('U')
    ->setPoop('@@@')
    ->setUdder('W');




echo $bessie;

$bibi = new Bear('Hello guys!');

echo $bibi;

$toto = new Sheep('Beeeeeeh');

echo $toto;