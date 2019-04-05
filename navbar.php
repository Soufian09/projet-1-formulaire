<?php
$nav = $_SERVER['REQUEST_URI'];
?>

<nav class="navbar navbar-dark navbar-expand-md justify-content-between">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-nav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse dual-nav w-50 order-1 order-md-0">
            <ul class="navbar-nav">
                <?php
                if ($nav == "/projet-1-formulaire/index.php") {
                    echo "<li class='nav-item active'>";
                } else {
                    echo "<li class='nav-item'>";
                }
                ?>
                <a class="nav-link pl-0" href="index.php"><i class="fa fa-fw fa-home"></i>Acceuil <span class="sr-only">Acceuil</span></a>
                </li>

                <?php
                if ($nav == "/projet-1-formulaire/produits.php") {
                    echo "<li class='nav-item active'>";
                } else {
                    echo "<li class='nav-item'>";
                }
                ?>
                <a class="nav-link" href="produits.php"><i class="fa fa fw fa-code"></i>Produits</a>
                </li>
                <?php
                if ($nav == "/projet-1-formulaire/contact.php") {
                    echo "<li class='nav-item active'>";
                } else {
                    echo "<li class='nav-item'>";
                }
                ?>
                <a class="nav-link" href="contact.php"><i class="fa fa-fw fa-envelope"></i>Contact</a>
                </li>
            </ul>
        </div>
        <div class="navbar-collapse collapse dual-nav w-50 order-2">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="https://twitter.com/raspberry_pi"><i class="fa fa-twitter"></i></a></li>
                <li class="nav-item"><a class="nav-link" href="https://fr-fr.facebook.com/raspberrypi"><i class="fa fa-facebook"></i></a></li>
                <li class="nav-item"><a class="nav-link" href="https://github.com/raspberrypi"><i class="fa fa-github"></i></a></li>
            </ul>
        </div>
    </div>
</nav>
<img src="assets/img/logo-poulette-white.png" alt="logo de hacker poulette">