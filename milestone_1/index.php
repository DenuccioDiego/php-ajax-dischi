<?php
require __DIR__. '/db.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Php-Ajax-Dischi</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
     


     
     <main>
          <div class="container">
               <div class="row justify-content-center gy-4">

                    <?php foreach ($cards as $card): ?>
                    <div class="col-2">
                         <div class="card">
                              <img src="<?php echo $card['poster'] ?>" alt="">
                              <h3 class="text-white">
                                   <?php echo $card['title'] ?>
                              </h3>
                              <p class="text-muted">
                                   <span>
                                        <?php echo $card['author'] ?>
                                   </span>
                                   <span>
                                        <?php echo $card['year'] ?>
                                   </span>
                              </p>

                         </div>
                    </div>
                    <?php endforeach ?> 


               </div>
               
          </div>
     </main>

</body>
</html>