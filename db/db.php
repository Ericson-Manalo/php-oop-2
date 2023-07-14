<?php

include_once __DIR__ . '/../classes/Product.php';
include_once __DIR__ . '/../classes/Food.php';
include_once __DIR__ . '/../classes/Toy.php';
include_once __DIR__ . '/../classes/Couch.php';

$foods = [
    new Food('Monge', 'https://arcaplanet.vtexassets.com/arquivos/ids/270797-1800-1800/Monge-All-Breeds-Adult-Salmone-e-Riso-12Kg.jpg?v=1775744233&quality=1&width=1800&height=1800', 59.99, 'Food', 'Cibo', 'Salmon And Rice', 12),
    new Food('Whiskas', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXL_5Ty2Zo9sqDScEfoOUV_6bIBp3keBBgXjL5M2SMCj5cnWKfcds8gs05_gx5G329cZE&usqp=CAU', 2.99, 'Food', 'Cibo', 'Salmon And Rice', 0.6)
];

var_dump($foods);

$toys = [
    new Toy('Bird Piume', 'https://www.zoofood.it/wp-content/uploads/2021/02/16102_2.png', 4.49, 'Cat', 'Toy', 'Bacchetta'),
    new Toy('Polipus', 'https://www.farmacosmo.it/166179-large_default/cuteseas-polipo-large-peluche-sonoro-cani-cm-32-112695.jpg', 4.49, 'Dog', 'Toy', 'Peluche')
];

var_dump($toys);


$couches = [
    new Couch('Bedsure', 'https://storepupy.com/cdn/shop/products/DSC_0005_620x.jpg?v=1659818764', 30, 'Dog', 'Couch', 'Cotton'),
    new Couch('Cuccia Royal Blu', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSv_vE4xSz9Cqq23NJ18zHU6XLqyrOBNBpLSeBBr6-yywWBjVLWc0z_dvWzcN6w8ZkJikE&usqp=CAU', 19.99, 'Cat', 'Couch', 'Cotton')
];

var_dump($couches);





?>
