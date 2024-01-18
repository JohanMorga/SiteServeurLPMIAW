<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="description"
          content="La Licence professionnelle MIAW à La Rochelle permet aux étudiants de créer de vraies agences web pour développer des projets auprès de professionnels.">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Serveur LP MIAW</title>
    <link rel="icon" type="image/png"
          href="https://cdn.discordapp.com/icons/1088100220094656512/fa0de0a1ac25c9c3e0bfce67f436ed74.webp?size=160"/>
    <link rel="stylesheet" href="public/scss/master.css">
    <script src="https://kit.fontawesome.com/0d76749f2d.js" crossorigin="anonymous"></script>
    <script src="public/js/index.js" defer></script>
</head>
<body>
<header class="header-home">
    <img src="public/img/imgULR.png" alt="Université de La Rochelle">
</header>
<nav class="nav-desktop">
    <ul class="nav-menu">
        <li class="nav-menu__element">
            <a class="nav-menu__link nav-menu__link--active" href="index.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="lucide lucide-home icon__home">
                    <path class="icon__home--path" d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                    <polyline class="icon__home--polyline" points="9 22 9 12 15 12 15 22"/>
                </svg>
                <p class="nav-menu__text nav-menu__text--inactive">Accueil</p></a>
        </li>
        <li class="nav-menu__element">
            <a class="nav-menu__link nav-menu__link--agence" href="agence.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="lucide lucide-graduation-cap icon__agence">
                    <path class="icon__agence--path" d="M22 10v6M2 10l10-5 10 5-10 5z"/>
                    <path class="icon__agence--path" d="M6 12v5c3 3 9 3 12 0v-5"/>
                </svg>
                <p class="nav-menu__text nav-menu__text--active nav-menu__text--hover">Agences</p></a>
        </li>
    </ul>
</nav>
<nav class="nav-mobile">
    <ul class="nav-menu">
        <li class="nav-menu__element">
            <a class="nav-menu__link nav-menu__link--active" href="index.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="lucide lucide-home">
                    <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                    <polyline points="9 22 9 12 15 12 15 22"/>
                </svg>
                <p class="nav-menu__text nav-menu__text">Accueil</p></a>
        </li>
        <li class="nav-menu__element">
            <a class="nav-menu__link" href="agence.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="lucide lucide-graduation-cap">
                    <path d="M22 10v6M2 10l10-5 10 5-10 5z"/>
                    <path d="M6 12v5c3 3 9 3 12 0v-5"/>
                </svg>
                <p class="nav-menu__text nav-menu__text">Agences</p></a>
        </li>
    </ul>
</nav>
<main class="principal">
    <section class="principal-text">
        <h1 class="principal-text__title">LP MIAW</h1>
        <h2 class="principal-text__serveur">Serveur Pédagogique</h2>
        <p class="principal-text__formation">Métiers de l'informatique : Applications Web</p>
        <p class="principal-text__parcours"><strong>Développeur Full Stack - Web Designer Intégrateur</strong></p>
    </section>
    <section class="principal-img">
        <img class="principal-img__image" src="public/img/imageAccueil.png" width="1200" height="1000"
             alt="Image assets">
    </section>
    <section class="principal-mobile">
        <ul class="principal-reso">
            <li class="principal-reso__element">
                <a class="principal-reso__link" href="https://www.linkedin.com/company/licence-pro-miaw-la-rochelle/"><i
                            class="fa-brands fa-linkedin"></i></a>
            </li>
            <li class="principal-reso__element">
                <a class="principal-reso__link" href="https://www.instagram.com/lpmiaw_univlr/"><i
                            class="fa-brands fa-instagram"></i></a>
            </li>
        </ul>
    </section>
</main>
<footer class="footer">
    <p class="footer__text">Copyright LP MIAW © & <a class="footer__text--link" href="mention.php">Mentions légales</a>
    </p>
    <ul class="footer-reso">
        <li class="footer-reso__element">
            <a class="footer-reso__link" href="https://www.linkedin.com/company/licence-pro-miaw-la-rochelle/"><i
                        class="fa-brands fa-linkedin"></i></a>
        </li>
        <li class="footer-reso__element">
            <a class="footer-reso__link" href="https://www.instagram.com/lpmiaw_univlr/"><i
                        class="fa-brands fa-instagram"></i></a>
        </li>
    </ul>
</footer>
</body>
</html>
