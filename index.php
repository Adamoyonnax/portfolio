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
                <a class="nav-link" href="#e5">Epreuve E5</a>
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
                <p>Un futur développeur avec des ambitions lancinantes.</p>
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
                            Mon nom est LAKSSIOUAR Adam et je suis actuellement étudiant en BTS SIO option SLAM au sein du lycée Georges 
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
                        <strong style="font-size: 20px;">"J'ai commencé en ne sachant rien avec l'intention d'en savoir le plus."</strong>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section E5 -->
        <section id="e5" class="py-5 bg-light">
            <div class="container">
                <h2 class="text-center">l'Epreuve E5</h2>
                <h4 class="text-center text-muted">Thème : Intelligence Artificielle</h4>
                <div class="row mb-4">
                    <div class="col-md-4">
                        <h5>Pourquoi cette technologie ?</h5>
                        <p>
                            Par intérêt, curiosité et volonté éventuel dans le cadre de mon parcours de m'orienter dans ce domaine qui est nouveau,
                            je me suis engagé à réaliser une veille technologie sur l'intelligence artificielle avec pour intention d'être plus familier
                            avec ce domaine et comprendre les différents enjeux.
                        </p>
                    </div>
                    <div class="col-md-4">
                        <h5>Définition d'une IA</h5>
                        <p>
                            L’intelligence artificielle (IA) est un domaine informatique permettant à des machines de simuler des comportements humains, 
                            comme apprendre, raisonner, percevoir ou interagir, en utilisant des algorithmes, des données et des modèles prédictifs.
                        </p>
                    </div>
                    <div class="col-md-4">
                        <h5>Outils mis en place pour s'informer</h5>
                        <p>
                            Les applications de l'intelligence artificielle sont multiples. On peut citer par exemple les assistants vocaux, les 
                            voitures autonomes, les robots, les chatbots, les systèmes de recommandation ou encore les algorithmes de trading. 
                            Elle est présente dans notre quotidien et est amenée à se développer de plus en plus dans les années à venir.
                        </p>
                    </div>
                </div>
                <div class="text-center mb-4">
                    <img src="assets/images/portfolio_competences.png" alt="Portefeuille de Compétences" class="img-fluid">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h5>Liens vers des PDFs</h5>
                        <ul>
                            <li><a href="assets/pdf/document1.pdf" class="btn btn-link" download>Télécharger Document 1</a></li>
                            <li><a href="assets/pdf/document2.pdf" class="btn btn-link" download>Télécharger Document 2</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h5>Redirections</h5>
                        <ul>
                            <li><a href="https://drive.google.com/drive/folders/your-folder-id" class="btn btn-link" target="_blank">Google Drive</a></li>
                            <li><a href="https://www.figma.com/file/your-file-id" class="btn btn-link" target="_blank">Figma</a></li>
                        </ul>
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
                            <img src="assets/images/jeanmonnet.jpg" class="card-img-top" alt="Université Jean Monnet">
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
                            <img src="assets/images/quinet.jpg" class="card-img-top" alt="Lycée Edgar Quinet">
                            <div class="card-body">
                                <h3 class="card-title">Septembre  2017 - Juillet  2021 : Bac Général</h3>
                                <p class="card-text">Lycéen au sein du lycée Edgar Quinet à Bourg-en-Bresse (01) dans le cadre de l'obtention d'un BAC Général </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="card mb-4">
                            <img src="assets/images/georges.jpg" class="card-img-top" alt="Lycée Georges Brassens">
                            <div class="card-body">
                                <h3 class="card-title">20 Mai 2024 - 4 Juillet 2024 : Stage</h3>
                                <p class="card-text">Durant ce stage, j'ai appris principalement à utiliser de nouveaux outils tel que Twig ( Moteur de template ), 
                                    Bootstrap 5 (Framework CSS) ou encore Figma (Outil de design) pour essayer de créer un blog internet.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="card mb-4">
                            <img src="assets/images/SimoneVeil.jpg" class="card-img-top" alt="Lycée Simone Veil">
                            <div class="card-body">
                                <h3 class="card-title">18 Novembre 2024 - 20 Décembre 2024 : Stage  </h3>
                                <p class="card-text">Durant ce stage, j'ai commencé à développer une application web de gestion de stage avec le framework Laravel 
                                    afin de faciliter la gestion des stages que ce soit  pour les élèves, les professeurs ou les entreprises partenaires.
                                </p>
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
                            <h5>Jeu du Snake - Terminé</h5>
                            <p>Développement d'un jeu du Snake en C++.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/netflux.jpg" class="d-block w-100" alt="Projet 2">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Site web Netflux - Terminé</h5>
                            <p>Développement d'un site web de streaming fictif à l'instar de Netflix.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/gestion_stage.png" class="d-block w-100" alt="Projet 3">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Site web de Gestion de Stage -  En cours</h5>
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
            <h4 class="text-center text-muted">Thème : Intelligence Artificielle</h4> 
            <div class="row mb-4">
                <div class="col-md-4">
                    <h5> Pourquoi cette technologie ? </h5>
                    <p> 
                        Par intérêt, curiosité et volonté éventuel dans le cadre de mon parcours de m'orienter dans ce domaine qui est nouveau,
                        je me suis engagé à réaliser une veille technologie sur l'intelligence artificielle avec pour intention d'être plus familier
                        avec ce domaine et comprendre les différents enjeux.
                    </p>
                </div>
                <div class="col-md-4">
                    <h5> Une définition ? </h5>
                    <p> 
                        L’intelligence artificielle (IA) est un domaine informatique permettant à des machines de simuler des comportements humains, 
                        comme apprendre, raisonner, percevoir ou interagir, en utilisant des algorithmes, des données et des modèles prédictifs.
                    </p>
                </div>
                <div class="col-md-4">
                    <h5> Comment me suis-je informer ?</h5>
                    <ul class="info-list">
                        <li>Flux RSS : Google AI, Microsoft AI Blog etc... via Feeder</li> 
                        <li>Réseaux sociaux : Youtube, X, Reddit</li>
                        <li>Site web : developpez.com, codeproject.com</li>
                    </ul>
                </div>
            </div>
            
            <h2 class="text-center">Quelques actualités :</h2>
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
                                    <img src="assets/images/gemini.jpg" class="card-img-top veille-img" alt="Article 2">
                                    <div class="card-body">
                                        <h3 class="card-title">Gemini 2.0 - Un nouvel modèle d'IA de Google </h3>
                                        <p class="card-text">Gemini 2.0 marque une nouvelle ère pour l'IA, combinant capacités multimodales, actions natives et raisonnement avancé.
                                             Il améliore l'interaction homme-agent, favorise la recherche et intègre la sécurité, ouvrant la voie aux assistants universels innovants.
                                        </p>
                                        <a href="https://blog.google/technology/google-deepmind/google-gemini-ai-update-december-2024/" class="btn btn-primary">Lire plus</a>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Publié le 11/12/2024
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 d-flex align-items-stretch">
                                <div class="card mb-4">
                                    <img src="assets/images/Thiaroye_44.jpg" class="card-img-top veille-img" alt="Article 3">
                                    <div class="card-body">
                                        <h3 class="card-title">Quand l'Intelligence permet de faire revivre le passé</h3>
                                        <p class="card-text">Dans le reportage de France 24, il est expliqué que l'intelligence artificielle est utilisée pour valoriser des épisodes méconnus de l'histoire, comme dans le clip 
                                            "Jambaar" de Dip Doundou Guiss, retraçant le massacre des tirailleurs sénégalais en 1944, créé avec divers outils IA (ex : Runway, Kling IA).
                                        </p>
                                        <a href="https://www.youtube.com/watch?v=B5RgvbmzKCg" class="btn btn-primary">Lire plus</a>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Publié le 20/12/2024
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
                <a href="assets/pdf/CV_LAKSSIOUAR_Adam.pdf" class="btn btn-primary" download>Télécharger mon CV</a>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-white py-4">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <h5>Contact</h5>
                    <p>Email: <a href="mailto:adam.lakssiouar@zohomail.eu" class="text-white">adam.lakssiouar@zohomail.eu</a></p>
                </div>
                <div class="col-md-4 mb-3">
                    <h5>Réseaux Sociaux</h5>
                    <p>
                        <a href="https://www.linkedin.com/in/adam-lakssiouar-899b56309/" class="text-white" target="_blank">LinkedIn</a><br>
                        <a href="https://github.com/Adamoyonnax" class="text-white" target="_blank">GitHub</a>
                    </p>
                </div>
                <div class="col-md-4 mb-3">
                    <h5>Copyright</h5>
                    <p>&copy; 2025 LAKSSIOUAR Adam. Tous droits réservés.</p>
                </div>
            </div>
        </div>
    </footer>



    <!-- Ajout des scripts nécessaires pour que la barre de navigation fonctionne sur les petits écrans -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>