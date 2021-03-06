<?php 
    // include('data.php');
    


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <!-- /Bootstrap -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- Vue -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <!-- /Vue -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <title>PHP Dischi</title>
</head>
<body>
    <div id="app">
    <header>
        <div class="container-fluid">
            <div class="row ">
                <div class="col-12 d-flex justify-content-between">
                    <div class="logo-img w-50 p-2">
                    <img src="https://storage.googleapis.com/pr-newsroom-wp/1/2018/11/Spotify_Logo_RGB_Green.png" alt="" class="w-25">
                    </div>
                    <select>
            <option value="">All</option>
            <option value="Rock">Rock</option>
            <option value="Jazz">Jazz</option>
            <option value="Metal">Metal</option>
            <option value="Pop">Pop</option>
          </select>
                </div>
            </div>
        </div>
        
    </header>
    <main>
        
        <div class="container padding_top">
            <div class="row g-2">
  
                
                      <?php 
                include('data.php');
                     foreach($dbDischi as $dischi=>$detail){?>
            <div class="img_container col-3 d-flex justify-content-center flex-wrap">
                <div class="card">
                <div class="card-img">
                <img src="<?php echo $detail['poster'];?>" class="w-100 ">
                </div>

               <div class="card-text d-flex flex-column" >
               <h1 class="font_size"> <?php echo $detail['title'];?></h1>
                
                <p> <?php echo $detail['author'];?></p>
               </div>
                </div>
                
                    
                

            </div>

        <?php 
        }
        ?>
                
            </div>

          
        </div>
    
    </main>
    </div>
 <script src="js/main.js"></script>
</body>
</html>