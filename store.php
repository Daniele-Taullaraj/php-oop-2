<?php 

include __DIR__ . '/models/prodotto.php';
include __DIR__ . '/models/cuccia.php';
include __DIR__ . '/models/cibo.php';

$bastoncini = new Cibo('bastonciniTop','saporiti ottimi','cane','cibo','20£');

$dormi = new Cuccia('dormi','dormi al top','gatto','cuccia','50£');

$products=[$bastoncini,$dormi];

