<?php
    include 'caratteristiche.php';

    $lunghezza= count($dischi);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Php dischi</title>
</head>
<body>
    <div class="container">
        <div class="row d-flex justify-content-between">
            <div class="col-2 ">
                <?php for($i = 0; $i<$lunghezza; $i++) { ?>

                <h2><?php echo $dischi[$i]['title']?></h2>

                <?php } ?>
            </div>
            
        </div>
    </div>

    
     
</body>
</html>