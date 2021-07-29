<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Php dischi</title>
</head>
<body>
    <div id="app">
        <section>
            <div class="container-fluid head">
                <div class="row">
                    <div class="col-9">
                        <h1>MusicLine</h1>
                        <h2 class="mb-3 mt-3 fs-5">Enjoy the music</h2>
                    </div>
                    <div class="col-3 mt-4">
                        <a href="#"><span>Join Our Shop!!</span></a>
                    </div>
                </div>
            </div>
        
            <div class="container mt-5">
                <div class="row">
                    <div class="col-4 d-flex justify-content-between flex-column text-center align-items-center" v-for="cd in dischi">
                        <img :src="cd.poster" alt="cd.title">
                        <h2 class="mt-3"> {{cd.title}} </h2>
                        <h3> {{cd.author}}</h3>
                        <p> {{cd.year}}</p>
                    </div>
                
                </div>
            </div>
        </section>


    </div>

    <script src="js/script.js"></script>
     
</body>
</html>