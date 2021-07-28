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
    <link rel="stylesheet" href="css/style.css">
    <title>Php dischi</title>
</head>
<body class="bg-secondary">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 bg-warning">
                <h1>Super negozio mega wow di dischi</h1>
                <h2 class="mb-3 mt-3 fs-5">Guarda i migliori dischi che abbiamo</h2>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <?php for($i = 0; $i<$lunghezza; $i++) { ?>
                <div class="col-4 d-flex justify-content-between flex-column text-center align-items-center">

                    <img src="<?php echo $dischi[$i]['poster']?>" alt="">
                    <h2 class="fs-1"> <?php echo $dischi[$i]['title']?> </h2>
                    <h3 class="fs-5"> <?php echo $dischi[$i]['author']?></h3>
                    <p> <?php echo $dischi[$i]['year']?></p>

                </div>
            <?php } ?>
            
        </div>
    </div>

    
     
</body>
</html>