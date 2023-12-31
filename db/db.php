<?php

include_once __DIR__ . '/../classes/Product.php';
include_once __DIR__ . '/../classes/Food.php';
include_once __DIR__ . '/../classes/Toy.php';
include_once __DIR__ . '/../classes/Couch.php';

$foods = [
    new Food('Monge', 'https://arcaplanet.vtexassets.com/arquivos/ids/270797-1800-1800/Monge-All-Breeds-Adult-Salmone-e-Riso-12Kg.jpg?v=1775744233&quality=1&width=1800&height=1800', 59.99, 'Food', 'Crocchette', 'Salmon And Rice', 12),


    new Food('Monge', 'https://arcaplanet.vtexassets.com/arquivos/ids/223958-200-200/monge-cane-light-salmone-e-riso.jpg?v=1775908829', 49.99, 'Food', 'Crocchette', 'Light Salmon', 12),

    new Food('Virtus', 'https://arcaplanet.vtexassets.com/arquivos/ids/266476-200-200/virtus-dog-adult-wild-taste-pollo-400g.jpg?v=1775894391', 49.99, 'Food', 'Cibo umido', 'Duck', 12),

    new Food('Virtus', 'https://arcaplanet.vtexassets.com/arquivos/ids/224338-200-200/virtus-rustic-cane-adult.jpg?v=1775904189', 21.90, 'Food', 'Crocchette', 'Turkey Chicken', 4),

    new Food('Natural Trainer', 'https://arcaplanet.vtexassets.com/arquivos/ids/264311-200-200/8059149278711_AFF_TRA27_PLB53-Y-V1_NT_SENSITIVE_NO_GRAIN_AD_M_M_PORK_12_KG_3D_face.jpg?v=1775646442', 58.99, 'Food', 'Crocchette', 'Pork', 12),

    new Food('Cesar', 'https://arcaplanet.vtexassets.com/arquivos/ids/286846-200-200/VHN-GASTROINTESTINAL-LOW-FAT-DOG-LOAF-CAN-400GR-PACKSHOT-rc-psd-png-2000x1320-150-RGB.png_214084.jpg?v=1775912582', 0.99, 'Lamb', 'Cibo umido', 'Beef', 0.15),

    new Food('Natural Trainer Small & Toy', 'https://arcaplanet.vtexassets.com/arquivos/ids/253190-200-200/trainer-natural-small-800g.jpg?v=1775866606', 14.99, 'Food', 'Crocchette', 'Raw Ham and Rice', 3),

    new Food('Natural Trainer Adult', 'https://arcaplanet.vtexassets.com/arquivos/ids/253183-200-200/trainer-medium-beef.jpg?v=1775897027', 14.99, 'Food', 'Cibo', 'Raw Ham and Rice', 3),

    //cats
    new Food('Whiskas', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXL_5Ty2Zo9sqDScEfoOUV_6bIBp3keBBgXjL5M2SMCj5cnWKfcds8gs05_gx5G329cZE&usqp=CAU', 2.99, 'Food', 'Cibo umido', 'Salmon And Rice', 0.6),

    new Food('Gourmet', 'https://arcaplanet.vtexassets.com/arquivos/ids/275290-200-200/gourmet-gold--gatto-mix-moussemultipack-48.jpg?v=1775908755', 1.99, 'Food', 'Cibo umido', 'Multipack Mousse Mix', 0.15),

    new Food('Virtus', 'https://arcaplanet.vtexassets.com/arquivos/ids/272309-200-200/virtus-cat-nature-atlantic-formula-multipack.jpg?v=1775908680', 2.99, 'Food', 'Cibo umido', 'Cat Adult', 0.15),

    new Food('Natural Trainer', 'https://arcaplanet.vtexassets.com/arquivos/ids/248329-200-200/trainer-natural-gatto-sterilized-salmone.jpg?v=1775907155', 2.70, 'Food', 'Crocchette', 'Sterilised Salmon', 1)

];

var_dump ($foods);


$toys = [

    new Toy('Polipus', 'https://www.farmacosmo.it/166179-large_default/cuteseas-polipo-large-peluche-sonoro-cani-cm-32-112695.jpg', 4.49, 'Dog', 'Toy', 'Peluche'),

    new Toy('Kong Extreme', 'https://arcaplanet.vtexassets.com/arquivos/ids/258247-200-200/kong-extreme1.jpg?v=1775866425', 9.99, 'Dog', 'Toy', 'Gomma'),

    new Toy('Camon', 'https://arcaplanet.vtexassets.com/arquivos/ids/269822-200-200/yes-pallina-per-cane-basket.jpg?v=1775909426', 2.74, 'Dog', 'Toy', 'Ball'),

    new Toy('Trixie', 'https://arcaplanet.vtexassets.com/arquivos/ids/223864-200-200/trixie-cane-gioco-corda.jpg?v=1775866594', 4.13, 'Dog', 'Toy', 'Corda'),

    new Toy('Bird Piume', 'https://www.zoofood.it/wp-content/uploads/2021/02/16102_2.png', 4.49, 'Cat', 'Toy', 'Bacchetta'),

    new Toy('Tiragraffi Livia', 'https://arcaplanet.vtexassets.com/arquivos/ids/265339-200-200/trixie-tiragraffi-livia-rosa-antico-64cm.jpg?v=1775866826', 22.90, 'Cat', 'Toy', 'Tiragraffi'),

    new Toy('Pesce Guizzante', 'https://arcaplanet.vtexassets.com/arquivos/ids/264784-200-200/trixie-pesce-guizzante-gioco-gatto.jpg?v=1775904847', 8.20, 'Cat', 'Toy', 'Peluche'),
];




$couches = [
    new Couch('Bedsure', 'https://storepupy.com/cdn/shop/products/DSC_0005_620x.jpg?v=1659818764', 30.00, 'Dog', 'Couch', 'Cotton'),

    new Couch('Brandina Mast', 'https://arcaplanet.vtexassets.com/arquivos/ids/225719-200-200/mast-brandina-alluminio-60-blu.jpg?v=1775911738', 23.99, 'Dog', 'Couch', 'Tessuto'),

    new Couch('Cuscino Nautica', 'https://arcaplanet.vtexassets.com/arquivos/ids/264194-200-200/croci-cuscino-nautica.jpg?v=1775896512', 15.99, 'Dog', 'Couch', 'Cotton'),

    new Couch('Cuccia Domus', 'https://arcaplanet.vtexassets.com/arquivos/ids/227348-200-200/canile-domus-extra-large.jpg?v=1774174126', 279.00, 'Dog', 'Couch', 'Plastic'),




    new Couch('Cuccia Royal Blu', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSv_vE4xSz9Cqq23NJ18zHU6XLqyrOBNBpLSeBBr6-yywWBjVLWc0z_dvWzcN6w8ZkJikE&usqp=CAU', 19.99, 'Cat', 'Couch', 'Cotton'),

    new Couch('Cuccia Ciambella Pelosa', 'https://arcaplanet.vtexassets.com/arquivos/ids/277241-200-200/luna-e-teo-cuccia-pelosa-color-blu.jpg?v=1775520837', 24.99, 'Cat', 'Couch', 'Cotton'),

    new Couch('Cuccia Igloo Mimì', 'https://arcaplanet.vtexassets.com/arquivos/ids/272899-200-200/trixie-cuccia-per-gatto-grotta.jpg?v=1775780094', 29.99, 'Cat', 'Couch', 'Cotton')
];







?>
