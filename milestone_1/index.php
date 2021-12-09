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
     <style>
          
          header>div{
               background-color: #2e3a46;
               height:4rem;
               padding-left:20px;
               padding-top:5px
              
          }
          header img{
               
               width: 50px;
               
          }
          main{
               background-color: #1e2d3b;
               min-height: 92.1vh;
          }
          .card{
               
               background-color: #2e3a46;

          }

     </style>

</head>

<body>
     

     <header>

          <div>
               <img src="./asset/Spotify_logo_without_text.svg" alt="">
          </div>
          
     </header>


     <main>
          <div class="container pt-5">

               <div class="d-flex flex-wrap justify-content-center gap-5 gx-0">

                    <?php foreach ($cards as $card): ?>
                    
                         <div class="card col-2 text-center p-3 border-0 rounded-0 align-items-stretch">
                              <img src="<?php echo $card['poster'] ?>" alt="">
                              <h3 class="text-white pt-3 pb-1">
                                   <?php echo $card['title'] ?>
                              </h3>
                              <p class="text-muted">
                                   <span>
                                        <?php echo $card['author'] ?>
                                   </span><br>
                                   <span>
                                        <?php echo $card['year'] ?>
                                   </span>
                              </p>

                         </div>
                    
                    <?php endforeach ?> 

               </div>
               
          </div>
     </main>

</body>
</html>