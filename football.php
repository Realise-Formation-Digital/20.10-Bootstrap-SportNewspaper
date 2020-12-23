<!DOCTYPE html>
<html lang="fr">
<?php require 'partials/head.php'?>

<body>
    <!-- Entête avec le logo de la page-->
    <?php require 'partials/header.php'?>

    <!-- Main-panel -->
    <!-- Title du sport. Ici le Football -->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="text-center">
                    <h1 class="text-center mt-5">
                        Football
                    </h1>
                    <p class="text-secondary fs-15">
                        Toutes les nouvelles sur le sport plus populaire au monde
                    </p>
                </div>
                <h5 class="text-muted font-weight-medium mb-3">A l'Une</h5>
            </div>
        </div>

        <div class="row">
            <!-- Nouvelle principale titulaire -->
            <div class="col-lg-6  mb-5 mb-sm-2">
                <div class="position-relative image-hover">
                    <img src="assets/images/sports/Sports_1.jpg" class="img-fluid" alt="Sarsport" />
                    <span class="thumb-title">Boris Cespedes portait le No 10, mardi soir au Paraguay avec la
                        Bolivie.</span>
                </div>
            </div>

            <div class="col-lg-6  mb-5 mb-sm-2">

                <!-- Article a lire avec details-->
                <div class="row">
                    <div class="col-sm-12  mb-5 mb-sm-2">
                        <h5 class="font-weight-600 mt-3">
                            Boris Cespedes buteur avec la Bolivie
                        </h5>
                        <h6 class="font-weight-600 mt-3">Le milieu de terrain du Servette FC a permis à sa sélection de
                            prendre son premier point des éliminatoires de la Coupe du monde 2022.</h6>
                        <p class="fs-12 font-weight-normal">
                            Première titularisation et premier but! La soirée de mardi pouvait difficilement être plus
                            réussie pour Boris Cespedes. Aligné d’entrée avec la Bolivie au Paraguay, le milieu de
                            terrain
                            du Servette FC a inscrit la deuxième réussite de sa sélection (45e 2-1), participant
                            grandement
                            au premier point glané par La Verde en éliminatoires de la Coupe du monde 2022 (2-2 score
                            final).
                            Le joueur de 25 ans, nouveau porteur du No 10, a hérité d’un ballon aérien au point de
                            penalty
                            et a marqué d’une volée du plat du pied en première intention. De quoi fêter avec la manière
                            sa
                            troisième apparition sous le maillot bolivien, qu’il avait déjà porté un mois plus tôt
                            contre le
                            Brésil de Neymar (défaite 5-0; 46 minutes de jeu) et l’Argentine de Messi (défaite 2-1; 26
                            minutes de jeu).
                            Pour sa première titularisation, l’ancien international suisse M16, M18 et M19 a été
                            remplacé à
                            la 81e. La Verde occupe toujours la dernière place des éliminatoires du Mondial 2022, à
                            égalité
                            avec le Pérou (1 point en 4 matches).
                        </p>
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