<!DOCTYPE html>
<html lang="fr">
<?php require 'partials/head.php'?>

<body>
    <!-- Entête avec le logo de la page-->
    <?php require 'partials/header.php'?>

    <!-- Main-panel -->
    <!-- Title du sport. Ici le hockey -->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="text-center">
                    <h1 class="text-center mt-5">
                        Hockey
                    </h1>
                    <p class="text-secondary fs-15">
                        Toutes les nouvelles sur le sport plus populaire de Suisse!
                    </p>
                </div>
                <h5 class="text-muted font-weight-medium mb-3">A l'Une</h5>
            </div>
        </div>

        <div class="row">
            <!-- Nouvelle principale titulaire -->
            <div class="col-lg-6  mb-5 mb-sm-2">
                <div class="position-relative image-hover">
                    <img src="assets/images/sports/Sports_6.jpg" class="img-fluid" alt="Sarsport" />
                    <span class="thumb-title">Genève-Servette, force tranquille</span>
                </div>
            </div>

            <div class="col-lg-6  mb-5 mb-sm-2">

                <!-- Article a lire avec details-->
                <div class="row">
                    <div class="col-sm-12  mb-5 mb-sm-2">
                        <h5 class="font-weight-600 mt-3">
                            Genève-Servette, force tranquille
                        </h5>
                        <h6 class="font-weight-600 mt-3">Les Aigles se sont imposés 2-5 à Davos en donnant l’impression
                            d’en
                            avoir encore sous la lame. Impressionnant.</h6>
                        <p class="fs-12 font-weight-normal">
                            Au terme d’une première période équilibrée, les deux équipes ne se sont laissé qu’un minimum
                            d’espace pour se montrer dangereuses. Outre deux périodes de supériorité numérique pour les
                            Davosiens, les débats ont été plutôt équilibrés. À 5 contre 4, Enzo Corvi a manqué à deux
                            reprises une cage vide. Damien Riat, sur une passe de Linus Omark, s’est créé la meilleure
                            chance des Aigles en fin de tiers-temps.</p>
                        <p class="fs-12 font-weight-normal">
                            C’est lors de la seconde période que les choses se sont accélérées. Peu après la mi-match,
                            pour
                            être exact. En supériorité numérique, Damien Riat a ouvert la marque à la 31e (0-1).
                            L’ailier
                            genevois a été imité quelques instants plus tard par Magnus Nygren. La prune du défenseur
                            grison
                            n’a laissé aucune chance à Gauthier Descloux (32e, 1-1). Le jeu avait à peine repris que les
                            Aigles ont viré à nouveau en tête. Noah Rod trompait son ancien coéquipier Robert Mayer
                            (34e,
                            1-2).</p>
                        <p class="fs-12 font-weight-normal">
                            Durant la troisième période, Genève-Servette a parfaitement contenu les attaques grisonnes.
                            Ce
                            sont même les visiteurs qui ont à nouveau marqué. Un centre-tir de Tanner Richard a terminé
                            sa
                            course au fond des filets (49e, 1-3). À la suite de cette réussite du joueur de centre, le
                            HCD a
                            tenté de revenir, mais la défense genevoise a parfaitement résisté. Linus Omark a assuré la
                            victoire du GSHC dans la cage vide (58e 1-4). La réduction de Luca Hischier n’y a rien
                            changé
                            puisque Jacquemet a inscrit le 2-5 dans un filet à nouveau désert.</p>
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
    <!-- Formulaire de connection -->
    <?php require 'partials/login.php'?>
    <!-- footer and scripts-->
    <?php require 'partials/footer.php'?>
    </div>
    </div>
</body>

</html>