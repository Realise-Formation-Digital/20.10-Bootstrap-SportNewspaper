<!DOCTYPE html>
<html lang="fr">
<?php require 'partials/head.php'?>

<body>
    <!-- Entête avec le logo de la page-->
    <?php require 'partials/header.php'?>

    <!-- Main-panel -->
    <!-- Title du sport. Ici le Tennis -->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="text-center">
                    <h1 class="text-center mt-5">
                        Tennis
                    </h1>
                    <p class="text-secondary fs-15">
                        Toutes les nouvelles sur le sport de la petite balle!
                    </p>
                </div>
                <h5 class="text-muted font-weight-medium mb-3">A l'Une</h5>
            </div>
        </div>

        <div class="row">
            <!-- Nouvelle principale titulaire -->
            <div class="col-lg-6  mb-5 mb-sm-2">
                <div class="position-relative image-hover">
                    <img src="assets/images/sports/tsitsipas.jpg" class="img-fluid" alt="Sarsport" />
                    <span class="thumb-title">Tsitsipas bat Rublev et qualifie Thiem</span>
                </div>
            </div>

            <div class="col-lg-6  mb-5 mb-sm-2">
                <!-- Article a lire avec details-->
                <div class="row">
                    <div class="col-sm-12  mb-5 mb-sm-2">
                        <h5 class="font-weight-600 mt-3">
                            Tsitsipas bat Rublev et qualifie Thiem
                        </h5>
                        <h6 class="font-weight-600 mt-3">Stefanos Tsitsipas a sauvé une balle de match et battu Andrey
                            Rublev 6-1, 4-6, 7-6 (8/6), mardi au Masters de Londres, une victoire qui offre à Dominic
                            Thiem
                            une place pour les demi-finales. </h6>
                        <p class="fs-12 font-weight-normal">
                            Stefanos Tsitsipas a sauvé une balle de match et battu Andrey Rublev 6-1, 4-6, 7-6 (8/6),
                            mardi
                            au Masters de Londres, une victoire qui qualifie Dominic Thiem pour les demi-finales.
                            Le Grec de 22 ans, 6e mondial et tenant du titre, jouera sa qualification jeudi contre
                            Rafael
                            Nadal (2e), qui avait perdu auparavant face à Thiem.
                            Ce dernier, finaliste en 2019, est le seul joueur du groupe Londres 2020 à compter deux
                            victoires en deux matches.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-sm-12">
                <h5 class="text-muted font-weight-medium mb-3">Les Plus Lus</h5>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-sm-3  mb-5 mb-sm-2">
                <div class="position-relative image-hover">
                    <a href="hockey.html">
                        <img src="assets/images/sports/Sports_20.jpg" class="img-fluid" alt="Sarsport" />
                        <span class="thumb-title">HOCKEY</span>
                    </a>
                </div>
                <h5 class="font-weight-600 mt-3">
                    Genève-Servette, force tranquille
                </h5>
            </div>

            <div class="col-sm-3  mb-5 mb-sm-2">
                <div class="position-relative image-hover">
                    <a href="hockey.html">
                        <img src="assets/images/sports/Sports_20.jpg" class="img-fluid" alt="Sarsport" />
                        <span class="thumb-title">HOCKEY</span>
                    </a>
                </div>
                <h5 class="font-weight-600 mt-3">
                    Berne a perdu contre Davos
                </h5>
            </div>
            <div class="col-sm-3  mb-5 mb-sm-2">
                <div class="position-relative image-hover">
                    <a href="tennis.html">
                        <img src="assets/images/sports/Sports_14.jpg" class="img-fluid" alt="Sarsport" />
                        <span class="thumb-title">TENNIS</span>
                    </a>
                </div>
                <h5 class="font-weight-600 mt-3">
                    Tsitsipas bat Rublev et qualifie Thiem
                </h5>
            </div>
            <div class="col-sm-3  mb-5 mb-sm-2">
                <div class="position-relative image-hover">
                    <a href="tennis.html">
                        <img src="assets/images/sports/Sports_16.jpg" class="img-fluid" alt="Sarsport" />
                        <span class="thumb-title">TENNIS</span>
                    </a>
                </div>
                <h5 class="font-weight-600 mt-3">
                    Thiem domine Nadal
                </h5>
            </div>
        </div>
    </div>

    <!-- footer and scripts-->
    <?php require 'partials/footer.php'?>
    </div>
    </div>
</body>

</html>