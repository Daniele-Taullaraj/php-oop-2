<?php 

include __DIR__ . '/models/prodotto.php';
include __DIR__ . '/models/cuccia.php';
include __DIR__ . '/models/cibo.php';
include __DIR__ . '/models/categoria.php';

$categoriaCane= new Categoria('cane','prodotti per cani');
$categoriaGatto= new Categoria('gatto','prodotti per gatti');



$bastoncini = new Cibo('bastonciniTop','saporiti ottimi',$categoriaCane,'cibo','20£');

$dormi = new Cuccia('dormi','dormi al top',$categoriaGatto,'cuccia','50£');

$products=[$bastoncini,$dormi];

