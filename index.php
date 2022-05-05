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
    <title>PHP Dischi</title>
</head>
<body>
    <header>
        <div class="container-fluid">
            <div class="row ">
                <div class="col-12">
                    <div class="logo-img w-50 p-2">
                    <img src="https://storage.googleapis.com/pr-newsroom-wp/1/2018/11/Spotify_Logo_RGB_Green.png" alt="" class="w-25">
                    </div>
                </div>
            </div>
        </div>
        
    </header>
    <main>
        <div class="container padding_top">
            <div class="row">
                
                      <?php 
                include('data.php');
                     foreach($dbDischi as $dischi=>$detail){?>
            <div class="img_container col-3">
                <img src="<?php echo $detail['poster'];?>" class="w-100 ">
                    <h1 class="font_size"> <?php echo $detail['author'];?></h1>
                 <div class="text_card">
                    <p> <?php echo $detail['title'];?></p>
                </div>

            </div>

        <?php 
        }
        ?>
                
            </div>

          
        </div>
    
    </main>

 <script src="js/main.js"></script>
</body>
</html>