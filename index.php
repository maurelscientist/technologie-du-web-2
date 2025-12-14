<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>UPB Student's</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark container">
            <a class="navbar-brand" href="index.php">Gestion_UPB</a>

            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Accueil</a></li>
                    <li> <a href="inscription.php" class="nav-link">Inscription</a>
                    </li>
                    <li>
                        <a href="login.php" class="nav-link">conexion</a>
                    </li>
                </ul>
                <ul class="navbar-nav mx-auto">
                    <li>
                        <form class="d-flex" onsubmit="return rechercher(event)">
                            <input id="searchInput" class="form-control me-2" type="search" placeholder="Rechercher...">
                            <button class="btn btn-light"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path
                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                                </svg></button>
                        </form>
                    </li>

                    <li><button id="darkBtn" class="ms-3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-moon-fill" viewBox="0 0 16 16">
                                <path
                                    d="M6 .278a.77.77 0 0 1 .08.858 7.2 7.2 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277q.792-.001 1.533-.16a.79.79 0 0 1 .81.316.73.73 0 0 1-.031.893A8.35 8.35 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.75.75 0 0 1 6 .278" />
                            </svg>
                        </button>
                    </li>

                    <li><button id="github" class="ms-3"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                                <path
                                    d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8" />
                            </svg></button>
                    </li>
                    <Li>
                        <Button id="linkedin" class="ms-3"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                                <path
                                    d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z" />
                            </svg></Button>
                    </Li>
                </ul>
            </div>
        </nav>
    </header>

    <section class="hero">
        <div class="hero-content">
            <a href="login2.php">liste des etudiants</a>
        </div>
    </section>

    <section class="apropos container">
        <h2 class="text-center mb-4">À propos de Gestion_UPB</h2>
        <p class="text-center">
            Gestion_UPB est une plateforme moderne dédiée aux étudiants de l’Université Polytechnique de Bingerville.
            Elle facilite l’accès aux informations, services, ressources pédagogiques et outils numériques.
        </p>
    </section>

    <section class="services">
        <h2 class="text-center mb-5">Nos Services</h2>

        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="service-box text-center">
                        <h4>Bibliothèque numérique</h4>
                        <p>Accédez à des milliers de documents et ressources.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="service-box text-center">
                        <h4>Espace étudiant</h4>
                        <p>Consultez vos notes, emplois du temps et informations.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="service-box text-center">
                        <h4>Support & Assistance</h4>
                        <p>Une équipe dédiée pour vous accompagner.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container my-5">
        <h2 class="text-center mb-4">Autres</h2>

        <div class="row g-4">
            <div class="col-md-6">
                <div class="card-autres">
                    <img src="https://picsum.photos/500/250?random=1">
                    <a href="https://upbstudents-labibliotheque.com/">La Bibliothèque</a>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card-autres">
                    <img src="https://picsum.photos/500/250?random=2">
                    <a href="https://upb.ci/">UPB</a>
                </div>
            </div>
        </div>
    </section>

    <section class="stats">
        <h2 class="text-center mb-4"> satistiques</h2>
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3 stat-box">
                    <h3>12 000+</h3>
                    <p>Étudiants</p>
                </div>

                <div class="col-md-3 stat-box">
                    <h3>25</h3>
                    <p>Filières</p>
                </div>

                <div class="col-md-3 stat-box">
                    <h3>150+</h3>
                    <p>Enseignants</p>
                </div>

                <div class="col-md-3 stat-box">
                    <h3>98%</h3>
                    <p>Réussite</p>
                </div>
            </div>
        </div>
    </section>

    <div class="marquee">
        <span class="black">BROU AMOIKON MAUREL</span>
        <span class="black">KOFFI NANGO CHRIST</span>
        <span class="black">DANHI MINMON</span>
        <span class="black">ANOH AMIEN CHRIST</span>
        <span class="black">MIAGE L2</span>
        <span class="black">GROUPE 2</span>
        <span class="black">TECHNOLOGIE DU WE 2</span>
    </div>

    <section class="newsletter text-center p-5 bg-light" id="newsletter">
        <h3>Abonnez-vous à notre Newsletter</h3>
        <form class="d-flex justify-content-center mt-3">
            <input type="email" class="form-control w-50 me-2" placeholder="Votre email">
            <button class="btn btn-success">S'abonner</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2025 - Université Polytechnique de Bingerville</p>
        <p>Bingerville, Côte d’Ivoire | Tel : +225 07 69 29 19 65</p>
    </footer>

    <script>
    document.getElementById("github").onclick = function() {
        window.open("https://github.com/maurelscientist")
    };
    document.getElementById("darkBtn").onclick = function() {
        document.body.classList.toggle("dark");
    };
    document.getElementById("linkedin").onclick = function() {
        window.open("https://www.linkedin.com/in/maurel-brou-9639b43a0/");
    };

    function rechercher(e) {
        e.preventDefault();
        let val = document.getElementById("searchInput").value.toLowerCase();

        if (val === "" || val.length < 2) {
            alert("Veuillez entrer un mot clé");
            return false;
        }

        let contenu = document.body.innerText.toLowerCase();

        if (!contenu.includes(val)) {
            alert("Non trouvé");
        } else {
            alert("Élément trouvé !");
        }
    }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>