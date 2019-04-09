<?php
echo $_SERVER['REQUEST_URI'];
?>
<!DOCTYPE html>
<html>

<head>
    <title>Hackers Roulette</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/main.css">


</head>

<body>
    <?php include "navbar.php" ?>
    <h1 class="title">Bienvenue chez Hackers Poulette</h1>
    <div class="blue-divider"></div>
    <main class="main-div container-fluid">
        <section class="carous">
            <div id="carouselwithIndicators" class="carousel slide w-50" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>

                <section class="carousel-inner">
                    <article></article> class="carousel-item active">
                        <a href="produits.php"> <img class="d-block w-100" src="assets/img/raspi.gif" alt="raspi.gif"></a>
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Découvrer les dernières nouveautés Raspberry!</h5>
                        </div>
                    </article>

                    <article class="carousel-item">
                        <a href="https://raspbian-france.fr/actualites-raspberry-pi/"> <img class="d-block w-100" src="assets/img/news.gif" alt="news.gif"></a>
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Suivez l'actu tech pour ne rien rater </h5>

                        </div>
                    </article>

                    <article class="carousel-item">
                        <a href="https://www.cdiscount.com/informatique/r-raspberry+pi+3.html#_his_"> <img class="d-block w-100" src="assets/img/promo.gif" alt="promo.gif"> </a>

                        <div class="carousel-caption d-none d-md-block">
                            <h5>PROMO SPECIAL !! </h5>
                        </div>
                    </article>

                </section>

                <a class="carousel-control-prev" href="#carouselwithIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Précedent</span>
                </a>

                <a class="carousel-control-next" href="#carouselwithIndicators" role=" button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Suivant</span>
                </a>
            </div>
        </section>
    </main>
    <?php include "footer.php" ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
</body>

</html>