<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar" id="navbar">
        <h1 class="navbar-title">Mon Portfolio</h1>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#a-propos">À propos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#parcour">Parcours</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#projet">Projet</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#veille">Veille Technologique</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#cv">CV</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
            </li>
        </ul>
    </nav>

    <div class="main-content">
        <!-- Section Accueil -->
        <section id="accueil">
            <div class="container-fluid p-0">
                <div class="image-container">
                    <img src="assets/images/accueil.jpg" alt="Image d'accueil" class="image-accueil w-100">
                </div>
                <h2>Bienvenue sur mon Portfolio</h2>
                <p>Je suis un développeur passionné, spécialisé dans le développement web et mobile. Explorez mes projets et mon parcours.</p>
            </div>
        </section>

        <!-- Section À propos -->
        <section id="a-propos" class="py-5">
            <div class="container">
                <h2 class="text-center">Qui suis-je ?</h2>
                <div class="row">
                    <div class="col-md-4 text-center">
                        <img src="assets/images/image_default.webp" alt="Photo de moi" class="img-fluid rounded-circle mb-3">
                    </div>
                    <div class="col-md-8">
                        <p>
                            Mon nom est LAKSSIOUAR Adam et je suis actuellement étudiant en informatique au sein du lycée Georges 
                            Brassens à Rive-de-Gier (42). Je porte depuis quelques années un intérêt à ce domaine et plus précisément au 
                            développement, que ce soit dans le cadre du front-end ou du back-end. J'ai pu acquérir des compétences dans
                            ces deux axes, mais aussi des compétences complémentaire à la programmation.
                        </p>
                        <p>
                            Mon objectif est de continuer d'apprendre au sein de ce vaste univers que représente l'informatique, et de
                            pouvoir contribuer à l'avenir que réserve le numérique. En dehors de l'infrmatique, j'apprécie aussi bien des 
                            choses comme la musique, les échecs ou encore le sport. Je varie aussi les plaisirs, ouvert à de nouvelles 
                            expériences et essayant d'être touche à tout.  
                        </p>
                        <p>Dans ce Portfolio, vous retrouverez des informations sur mon parcours, mes projets en cours ou terminés ou bien
                            encore des articles sur la veille technique que j'ai réalisé dans le cadre de mon épreuve E5. Pour plus 
                            d'informations concernant mes compétences ou mon expérience professionel, veuille-vous référer à mon CV ou
                            bien me contacter directement par les différentes méthodes disponibles.
                        </p>
                        <strong style="font-size: 1.5rem;">"J'ai commencé en ne sachant rien avec l'intention d'en savoir le plus."</strong>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section Parcours -->
        <section id="parcour" class="py-5 bg-light">
            <div class="container">
                <h2 class="text-center">Mon Parcours</h2>
                <div class="row justify-content-center">
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="card mb-4">
                            <img src="assets/images/brassens.jpg" class="card-img-top" alt="Lycée Georges Brassens">
                            <div class="card-body">
                                <h3 class="card-title">Septembre 2023 - Présent : BTS SIO option SLAM</h3>
                                <p class="card-text">Étudiant au lycée Georges Brassens à Rive-de-Gier (42) dans le cadre de l'obtention d'un BTS.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="card mb-4">
                            <img src="assets/images/jeanmonnet.jpg" class="card-img-top" alt="Lycée [Nom du Lycée]">
                            <div class="card-body">
                                <h3 class="card-title">Septembre 2021 - Juillet  2023  : Licence Informatique</h3>
                                <p class="card-text">Etudiant à l'université de Jean Monnet à Saint-Etienne (42) dans le cadre de l'obention d'une Licence
                                    Informatique. 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="card mb-4">
                            <img src="assets/images/quinet.jpg" class="card-img-top" alt="[Nom de l'Entreprise]">
                            <div class="card-body">
                                <h3 class="card-title">Septembre  2017 - Juillet  2021 : Bac Général</h3>
                                <p class="card-text">Lycéen au sein du lycée Edgar Quinet à Bourg-en-Bresse (01) dans le cadre de l'obtention d'un BAC Général </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="card mb-4">
                            <img src="assets/images/quinet.jpg" class="card-img-top" alt="[Nom de l'Entreprise]">
                            <div class="card-body">
                                <h3 class="card-title">20 Mai 2024 - 4 Juillet 2024 : Stage</h3>
                                <p class="card-text">Stage de 6 semaines</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="card mb-4">
                            <img src="assets/images/quinet.jpg" class="card-img-top" alt="[Nom de l'Entreprise]">
                            <div class="card-body">
                                <h3 class="card-title">18 Novembre 2024 - 20 Décembre 2024 : Stage  </h3>
                                <p class="card-text">Stage de 5 semaines</p>
                            </div>
                        </div>
                    </div>
                    <!-- Ajoutez d'autres éléments de parcours ici -->
                </div>
            </div>
        </section>

    <!-- Section Projet -->
    <section id="projet" class="py-5">
        <div class="container">
            <h2 class="text-center">Mes Projets</h2>
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/images/snakeC++.jpg" class="d-block w-100" alt="Projet 1">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Jeu du Snake</h5>
                            <p>Développement d'un jeu du Snake en C++.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/netflux.jpg" class="d-block w-100" alt="Projet 2">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Site web Netflux</h5>
                            <p>Développement d'un site web de streaming fictif à l'instar de Netflix.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/gestion_stage.png" class="d-block w-100" alt="Projet 3">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Site web de Gestion de Stage</h5>
                            <p>Développement d'un site web pour la gestion de stage.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <!-- Section Veille Technologique -->
    <section id="veille" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center">Veille Technologique</h2>
            <h4 class="text-center text-muted">Thème : Intelligence Artificielle</h4> <!-- Sous-titre ajouté -->
            <div id="carouselArticles" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-4 d-flex align-items-stretch">
                                <div class="card mb-4">
                                    <img src="assets/images/article1.jpg" class="card-img-top veille-img" alt="Article 1">
                                    <div class="card-body">
                                        <h3 class="card-title">Un homme utilisant l'IA pour planifier un attentant</h3>
                                        <p class="card-text">Le 1er janvier 2025, deux attaques ont marqué les États-Unis : une explosion à Las Vegas planifiée via ChatGPT, causant 7 blessés, et un massacre à La Nouvelle-Orléans, avec 14 morts, impliquant des lunettes connectées.</p>
                                        <a href="https://intelligence-artificielle.developpez.com/actu/366548/L-homme-tue-dans-l-explosion-du-cybertruck-de-Las-Vegas-le-1er-janvier-a-utilise-ChatGPT-pour-planifier-l-explosion-Nous-savions-que-l-IA-allait-changer-la-donne-a-un-moment-ou-a-un-autre/" class="btn btn-primary">Lire plus</a>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Publié le 08/01/2025
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 d-flex align-items-stretch">
                                <div class="card mb-4">
                                    <img src="assets/images/article2.jpg" class="card-img-top veille-img" alt="Article 2">
                                    <div class="card-body">
                                        <h3 class="card-title">Article 2</h3>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et 
                                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex.
                                        </p>
                                        <a href="lien_vers_article_2" class="btn btn-primary">Lire plus</a>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Publié le 02/01/2023
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 d-flex align-items-stretch">
                                <div class="card mb-4">
                                    <img src="assets/images/article3.jpg" class="card-img-top veille-img" alt="Article 3">
                                    <div class="card-body">
                                        <h3 class="card-title">Article 3</h3>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et 
                                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex.
                                        </p>
                                        <a href="lien_vers_article_3" class="btn btn-primary">Lire plus</a>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Publié le 03/01/2023
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Ajoutez d'autres carousel-item ici pour plus d'articles -->
                </div>
            </div>
        </div>
    </section>

        <!-- Section CV -->
        <section id="cv" class="py-5 bg-light">
            <div class="container">
                <h2 class="text-center">Mon CV</h2>
                <p class="text-center">Téléchargez mon CV au format PDF en cliquant sur le bouton ci-dessous :</p>
                <div class="text-center">
                    <a href="<?php echo $cvLink; ?>" class="btn btn-primary" download>Télécharger mon CV</a>
                </div>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="assets/pdf/CV_LAKSSIOUAR_ADAM.pdf" allowfullscreen></iframe>
                </div>
            </div>
        </section>
    </div>

<!-- Section Contact -->
<section id="contact" class="py-5">
    <div class="container">
        <h2 class="text-center">Contactez-moi</h2>
        <div class="contact-form-container">
            <form action="contact.php" method="post">
                <div class="mb-3">
                    <label for="name" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </div>
            </form>
        </div>
    </div>
</section>



    <!-- Ajout des scripts nécessaires pour que la barre de navigation fonctionne sur les petits écrans -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>