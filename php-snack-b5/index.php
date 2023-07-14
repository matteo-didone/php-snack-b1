<!-- 
Crea una classe Indumento che ha un materiale come proprieta' da popolare nel costruttore.

Crea due sottoclassi Scarpa e Cappello, che avranno una proprieta' speciale ognuna 
oltre a richiamare il costruttore del parent. 

Istanziare un indumento, una scarpa e un cappello con il var_dump e verificare 
su schermo le differenze.
-->

<?php 

    require_once __DIR__ . '/Classes/Garment.php';
    require_once __DIR__ . '/Classes/Shoe.php';
    require_once __DIR__ . '/Classes/Hat.php';

    $garment = new Garment('cotton');
    $shoe = new Shoe('leather', 42);
    $hat = new Hat('felt', 'Bucket Hat');

    var_dump($garment);
    var_dump($shoe);
    var_dump($hat);

?>