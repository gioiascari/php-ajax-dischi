<?php 
    // include('data.php');
    


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>PHP Dischi</title>
</head>
<body>
<?php 
        include('data.php');
            foreach($dbDischi as $dischi=>$detail){?>
            <div class="card_dischi">
            <img src="<?php echo $detail['poster'];?>">
            <h1> <?php echo $detail['author'];?></h1>
            <p> <?php echo $detail['title'];?></p>


            </div>

        <?php 
        }
        ?>

</body>
</html>