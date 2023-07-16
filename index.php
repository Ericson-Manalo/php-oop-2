<?php 
    include_once __DIR__ . '/db/db.php';
    include_once __DIR__ . '/classes/Food.php';

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
    <title>Animal's shop</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Booleapet's Shop</h1>
        <div class="row">
            <div class="col-12">
                Shop:
            </div>
            <?php foreach ($foods as $food) { ?>
                <div class="card col-2 p-0 m-2" >
                    <div class="card-header">
                        <?php echo $food->name; ?>
                    </div>
                    <img src="<?php echo $food->image ?>"  class="card-img-top rounded-0" alt="<?php echo $food->name; ?>">
                    <div class="card-body p-3">
                        <h5 class="card-title">
                            <?php echo $food->name; ?>
                        </h5>
                        <h5 class="card-title">
                            <?php echo $food->price; ?>
                        </h5>
                    
                    </div>
                </div>
            <?php } ?>

            <?php foreach ($toys as $toy) { ?>
                <div class="card col-2 p-0 m-2" >
                    <div class="card-header">
                        <?php echo $toy->name; ?>
                    </div>
                    <img src="<?php echo $toy->image ?>"  class="card-img-top rounded-0" alt="<?php echo $food->name; ?>">
                    <div class="card-body p-3">
                        <h5 class="card-title">
                            <?php echo $toy->name; ?>
                        </h5>
                        <h5 class="card-title">
                            <?php echo $toy->price; ?>
                        </h5>
                    
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>