<?php
require_once 'mailer.php';?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
          content="Site Portefolio de Antoine Sueur - Developpeur Web & Web Mobile. Vous recherchez un junior ? Contactez-moi !">
    <link rel="shortcut icon" href="image/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0ce4d10e41.js" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="style.css">
    <title>Antoine Sueur - Developpeur Web</title>
</head>

<body>
<header id="accueil">
    <nav class="navbar fixed-top bg-white navbar-expand-lg navbar-light mb-5">
        <div class="container">
            <div class="ms-lg-5">
                <a href="#"> <img src="image/logo.png" class="w-50" alt="logo du site"></a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03"
                    aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="fas fa-bars myColor"></i>
                    </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor03">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link myColor" href="#">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link myColor" href="#skills">Compétences</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link myColor" href="#realisation">Realisations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link myColor" href="#interet">Centres d'interêts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link myColor" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<main>
    <section class="container menuFix">
        <div class="p-3 text-center textColor m-auto">
            <div class="photo_profil container">
                <img class="rounded-circle photo d-lg-none mb-2 w-50" src="image/photo.jpg"
                     alt="photo d'antoine sueur">
                <img class="rounded-circle border photo d-none d-lg-inline mb-2 w-25" src="image/photo.jpg"
                     alt="photo d'antoine sueur">
            </div>
            <h2 class="mt-1">Antoine Sueur</h2>
            <p class="m-auto w-75 mt-1">Développeur Web & Web Mobile</p>
            <p class="m-auto w-75 mt-1 mb-3">Vous recherchez un junior ?</p>
            <a id="btnContact" class="btn bgPerso mb-3" href="#contact">Contactez-moi !</a>
        </div>
    </section>
    <section class="bgPerso container text-center shadow rounded p-5 mb-4">
        <div class="row">
            <div class="col-12 metierp">
                <div>
                    <i class="fas fa-laptop-code fa-4x mb-4"></i>
                </div>
                <h2 class="mb-3">Un métier-passion</h2>
                <p>Passionné par l'informatique, je
                    suis de
                    cette
                    génération qui a totalement baigné dedans depuis la naissance. Développeur web et web mobile junior,<span class="fw-bold"> je recherche un stage pour la période du 20/12/21 au 04/03/22.</span> Je cherche donc
                    une structure pour m'épanouir et toujours apprendre plus encore. Ayant une préférence pour le
                    Backend, les projets PHP/Symfony/Api-Platform ont toute mon attention. Je suis très curieux
                    d'evoluer sur ces technologies.</p>
            </div>
        </div>
    </section>
    <section id="skills" class="container text-center p-5">
        <h2>Compétences</h2>
        <p class="p-3">Je suis assez polyvalent en terme de
            compétences. Je
            peux à la
            fois travailler sur des projets backend et frontend.</p>
        <div class="row flex-column p-2" data-aos="zoom-in" data-aos-duration="800">
            <div class="border rounded p-3 shadow mb-4 col-lg-8 offset-lg-2">
                <h3><i class="fas fa-graduation-cap myColor"></i> Diplome</h3>
                <p class="fw-bold">Dévoloppeur Web et Web Mobile - Titre RNCP niveau.5 (Bac+2)</p>
            </div>
            <div class="col-lg-2"></div>
        </div>
        <div class="d-lg-flex flex-lg-row justify-content-lg-evenly">
            <div class="border rounded p-3 shadow mb-4" data-aos="zoom-in" data-aos-duration="800">
                <h3><i class="fas fa-code myColor"></i> Front-End</h3>
                <p>Intégration - Framework - Responsive</p>
                <p class="myColor fw-bold">Html - Css - Bootstrap - Javascript</p>
            </div>

            <div class="border rounded p-3 shadow mb-4 me-lg-4 ms-lg-4" data-aos="zoom-in" data-aos-duration="800">
                <h3><i class="fas fa-server myColor"></i> Back-End</h3>
                <p>BDD - MVC - Api REST</p>
                <p class="myColor fw-bold">PHP - MySQL - Symfony - Wordpress</p>
            </div>

            <div class="border rounded p-3 shadow mb-4" data-aos="zoom-in" data-aos-duration="800">
                <h3><i class="fas fa-hands-helping myColor"></i> Workflow</h3>
                <p>Travail collaboratif - Gestion de projet</p>
                <p class="myColor fw-bold">VsCode - Git - Trello - Scrum - Agile</p>
            </div>
        </div>

    </section>
    <section class="bgPerso p-5 text-center container rounded shadow d-flex flex-column" id="realisation">
        <div>
            <i class="fas fa-check-square fa-3x mb-3"></i>
        </div>
        <h2>Mes réalisations</h2>
        <p class="mb-5">Vous trouverez sur chaque carte un lien vers le code sur
            github
            et un
            lien vers le projet hébergé en ligne.</p>
        <div class="d-lg-flex flex-lg-row">
            <div class="row">
                <div class="border rounded-3 p-3 text-center shadow-lg mb-4 bg-white textColor col-md-10 offset-md-1"
                     data-aos="zoom-in" data-aos-duration="1000">
                    <h3>Webagency</h3>
                    <div>
                        <img class="w-100" src="image/webagency.png" alt="">
                    </div>
                    <p class="mt-3 myColor fw-bold">Html - Css - Media Queries</p>
                    <div>
                        <a href="https://github.com/AntoineSueurPro/Projet-HTML-CSS" target="blank"><i
                                class="fab fa-github fa-2x me-5 textColor"></i></a>
                        <a href="https://webagency.antoine-sueur.com" target="blank"><i
                                class="fas fa-globe fa-2x textColor"></i></a>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
            <div class="row">
                <div class="border rounded-3 p-3 text-center shadow-lg mb-4 bg-white textColor col-md-10 offset-md-1"
                     data-aos="zoom-in" data-aos-duration="1300">
                    <h3>Restaurant</h3>
                    <div>
                        <img class="w-100" src="image/fiasco.png" alt="">
                    </div>
                    <p class="mt-3 myColor fw-bold">Html - CSS - Media Queries</p>
                    <div>
                        <a href="https://github.com/AntoineSueurPro/Le_Fiasco" target="blank"><i
                                class="fab fa-github fa-2x me-5 textColor"></i></a>
                        <a href="https://integration.antoine-sueur.com" target="blank"><i class="fas fa-globe fa-2x textColor"></i></a>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
            <div class="row">
                <div class="border rounded-3 p-3 text-center shadow-lg mb-4 bg-white textColor col-md-10 offset-md-1 "
                     data-aos="zoom-in" data-aos-duration="1500">
                    <h3>Blog PHP</h3>
                    <div>
                        <img class="w-100" src="image/blog.png" alt="">
                    </div>
                    <p class="mt-3 myColor fw-bold">PHP - Composer - MVC - MySQL</p>
                    <div>
                        <a href="https://github.com/AntoineSueurPro/CRUD-PHP" target="blank"><i
                                class="fab fa-github fa-2x me-5 textColor"></i></a>
                        <a href="https://projet4.antoine-sueur.com" target="blank"><i class="fas fa-globe fa-2x textColor"></i></a>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </section>
    <section class="p-5" id="interet">
        <h2 class="text-center textColor">Centres d'interêts</h2>
        <p class="text-center w-75 textColor m-auto mb-4">"Un mélange heureux de
            loisir
            et
            d'occupation
            rend
            l'homme
            animé et
            sensible à
            tous les plaisirs"</p>
        <div class="border rounded col-10 offset-1 p-3 shadow mb-4 fw-bold d-lg-none">
            <p data-aos="fade-in" data-aos-duration="1500"><i class="fas fa-coffee myColor me-1"></i> Café</p>
            <p data-aos="fade-in" data-aos-duration="2000"><i class="fas fa-rocket myColor me-1"></i> Espace
            </p>
            <p data-aos="fade-in" data-aos-duration="2500"><i class="fas fa-book myColor me-1"></i>
                Science-Fiction</p>
            <p data-aos="fade-in" data-aos-duration="3000"><i class="fas fa-lightbulb myColor me-1"></i>
                Nouvelles technologies</p>
            <p data-aos="fade-in" data-aos-duration="3000"><i class="fas fa-gamepad myColor me-1"></i> Jeux
                vidéos - Pop culture</p>
        </div>
        <div class="col-1 d-lg-none"></div>
        <div class=" d-none d-lg-flex row">
            <div
                    class="d-lg-flex text-center justify-content-around col-8 offset-2 border rounded-3 shadow-lg align-items-center fs-6 fw-bold mt-4">
                <div class="interetCard p-3">
                    <p><i class="fas fa-coffee myColor fs-1" data-aos="zoom-in" data-aos-duration="1500"></i></p>
                    <p>Café</p>
                </div>
                <div class="interetCard p-3">
                    <p><i class="fas fa-rocket myColor fs-1" data-aos="zoom-in" data-aos-duration="1800"></i></p>
                    <p>Espace</p>
                </div>
                <div class="interetCard p-3">
                    <p><i class="fas fa-book myColor fs-1" data-aos="zoom-in" data-aos-duration="2100"></i></p>
                    <p>Science-Fiction</p>
                </div>
                <div class="interetCard p-3">
                    <p><i class="fas fa-lightbulb myColor fs-1" data-aos="zoom-in" data-aos-duration="2400"></i></p>
                    <p>Nouvelles technologies</p>
                </div>
                <div class="interetCard p-3">
                    <p><i class="fas fa-gamepad myColor fs-1" data-aos="zoom-in" data-aos-duration="2700"></i></p>
                    <p>Jeux vidéo - Pop Culture</p>
                </div>
            </div>
            <div class="col-2"></div>
        </div>
    </section>
    <section class="bgPerso container rounded-top p-5 text-center" id="contact">
        <h3>Contactez-moi !</h3>
        <p class="mb-4">Pour toute demande d'informations ou si mon profil vous intéresse.</p>
<!--        <div class="mt-5 container bg-white shadow textColor rounded p-5 contact fw-bold">-->
<!--            <div class="">-->
<!--                <p><i class="fas fa-envelope fs-2 myColor"></i></p>-->
<!--                <p>antoine.sueur17@gmail.com</p>-->
<!--            </div>-->
<!--            <div class="">-->
<!--                <p><i class="fas fa-phone-alt fs-2 myColor"></i></p>-->
<!--                <p>07 82 03 44 90</p>-->
<!--            </div>-->
<!--        </div>-->
        <form class="border rounded w-75 m-auto p-3 shadow bg-white textColor" action="" method="POST">
            <?= isset($message) ? $message : ''?>
            <div class="form-group">
                <label class="fw-bold" for="email">Email<span class="text-danger"> *</span></label>
                <input type="email" class="form-control" name="email" id="email" required>
            </div>
            <div class="form-group">
                <label class="fw-bold" for="nom">Nom<span class="text-danger"> *</span></label>
                <input type="text" class="form-control" id="nom" name="nom" min="2" required>
            </div>
            <div class="form-group">
                <label class="fw-bold" for="objet">Objet</label>
                <input type="text" class="form-control" id="objet" name="objet">
            </div>
            <div class="form-group">
                <label class="fw-bold" for="message">Message<span class="text-danger"> *</span></label>
                <textarea class="form-control" name="message" id="message" rows="3" required></textarea>
            </div>
            <p class="text-danger text-start fw-bold requis mt-2">* Obligatoire</p>
            <input class="btn bgPerso mt-3" type="submit" value="Envoyer">
        </form>
    </section>
    <a href="#" id="goUp"><i class=" fas fa-angle-double-up"></i></a>
</main>
<footer class="textColor fw-bold text-center p-2">© 2021 All rights reserved | Antoine Sueur | Developpeur
    Web &
    Web Mobile</footer>
<script type="text/javascript" src="main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
    AOS.init();
</script>
</body>

</html>