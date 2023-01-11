<?php 
require_once __DIR__ . "/classes/Products.php";
require_once __DIR__ . "/classes/Food.php";
require_once __DIR__ . "/classes/Category.php";
require_once __DIR__ . "/classes/Game.php";

$dog = new Category("Cane", "<i class=\"fa-solid fa-dog\"></i>");
$cat = new Category("Gatto", "<i class=\"fa-solid fa-cat\"></i>");

$product = new Product("Collare", "https://www.buranchetto.com/3910-large_default/guinzaglio-ammortizzato-roamer.jpg", 7.99, $dog);
$food = new Food("Croccantini", "https://www.bing.com/images/blob?bcid=qL1OqNrcLh0F5A", 20.50, $cat);
$food->setExpiration("11/01/2024");
$game = new Game("Osso", "https://m.media-amazon.com/images/I/71aSf2AiBNL._AC_SY355_.jpg", 5.99, $dog);
$game->setMaterial("Gomma");

$produtcts = [
    $product,
    $food,
    $game
]
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
        <title>OOP-2</title>
    </head>
    <body>
        <div class="continer">

            <h1>Shop</h1>

            <div class="row">
                <?php foreach($products as $product) { ?>
                <div class="col-4">
                    <div class="card">
                        <img src="<?php echo $product->getImage(); ?>" class="card-img-top" alt="<?php echo $product->getName(); ?>">
                        <div class="card-body">
                            <div class="fs-2">
                                <?php echo $product->getCategory()->getIcon(); ?>
                            </div>
                            <h5 class="card-title"><?php echo $product->getName(); ?></h5>
                            <p class="card-text">Prezzo: <?php echo $product->getPrice(); ?>€</p>
                            <?php if( method_exists($product, 'getExpiration') ) { ?>
                            <p><strong>Scadenza: </strong> <?php echo $product->getExpiration(); ?></p>
                            <?php } ?>
                            <?php if( method_exists($product, 'getMaterial') ) { ?>
                            <p><strong>Materiale: </strong> <?php echo $product->getMaterial(); ?></p>
                            <?php } ?>
                            <a href="#" class="btn btn-primary">Acquista</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>

        </div>
    </body>
</html>