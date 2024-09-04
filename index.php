<?php
require_once __DIR__ . '/data/db.php';
require_once __DIR__ . '/Model/Product.php';

?>


<!DOCTYPE html>
<html lang="en">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap-grid.css' integrity='sha512-hhSu9overYjKfSjPCtJW3688VHkfBh+W1pR5Mysll91bOJwGjYntytGTtVXb2aisFOaYXXDrO38NKXDRPJWu7A==' crossorigin='anonymous'/>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OOP</title>
</head>
<body>

<div class="container my-5">
  <h1>Lista Prodotti:</h1>

  <div class="d-flex">
    <?php foreach($db as $product): ?>
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title"><?php echo $product->getName()  ?></h5>
          <img class="card-img-top" src="<?php echo $product->img ?>" alt="<?php echo $product->img ?>">
          <!-- Nullsafe oparator (?): se address è null non restituisce un errore  -->
          <h4>Categoria: <?php echo $product->getCategory() ?></h4>
        </div>
      </div>
    <?php endforeach; ?>

  </div>
  
</div>



  
</body>
</html>