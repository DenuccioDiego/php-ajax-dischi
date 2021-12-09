<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>php-ajax-dischi_Milestone_2</title>
     <?php include __DIR__ . '/layout/header.php'; ?>
     
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
     
<div id="app">
     <header>
          <div>
               <img src="./assets/img/Spotify_logo_without_text.svg" alt="">
          </div>
     </header>


     <main>
          <div class="container">
               <div class="d-flex flex-wrap justify-content-center gap-5 gx-0 pt-5">

                    <div 
                    v-for="disk in disks"
                    :key="disk.poster"
                    class="card col-2  text-center p-3 border-0 rounded-0 align-items-stretch">

                         <img :src="disk.poster" alt="">

                         <h3 class="text-white pt-3 pb-1">
                              {{disk.title}}
                         </h3>

                         <p class="text-muted">
                              <span>
                                   {{disk.author}}  
                              </span><br>
                              <span>
                                   {{disk.year}}  
                              </span>
                         </p>
                    </div>

               </div>
          </div>


     </main>

</div>

<!-- Collegamenti cdn per axios e vue -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/axios/0.24.0/axios.min.js' integrity='sha512-u9akINsQsAkG9xjc1cnGF4zw5TFDwkxuc9vUp5dltDWYCSmyd0meygbvgXrlc/z7/o4a19Fb5V0OUE58J7dcyw==' crossorigin='anonymous' referrerpolicy='no-referrer'></script>
<script src='https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js'></script>
<script src="./assets/js/app.js"></script>

</body>
</html>