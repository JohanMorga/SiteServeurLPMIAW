<?php

$agences2023 = array(
    "Artfull-code" => array(
        "link" => 'https://agence-artfull-code.lpmiaw.univ-lr.fr/',
        "image" => 'public/img/Agences/2023-2024/artfull.png'
    ),
    "Lispsom" => array(
        "link" => 'https://agence-lipsom.lpmiaw.univ-lr.fr/',
        "image" => 'public/img/Agences/2023-2024/lipsom.png'
    ),
    "Lotus-realisation" => array(
        "link" => 'https://agence-lotus-realisation.lpmiaw.univ-lr.fr/',
        "image" => 'public/img/Agences/2023-2024/lotus.png'
    ),
    "Moderniweb" => array(
        "link" => 'https://agence-moderniweb.lpmiaw.univ-lr.fr',
        "image" => 'public/img/Agences/2023-2024/moderniweb.png'
    ),
    "Pawweb" => array(
        "link" => 'https://agence-pawweb.lpmiaw.univ-lr.fr/',
        "image" => 'public/img/Agences/2023-2024/pawweb.png'
    ),
    "Studio-fmr" => array(
        "link" => 'https://agence-studio-fmr.lpmiaw.univ-lr.fr/',
        "image" => 'public/img/Agences/2023-2024/studiofmr.png'
    ),
    "Verseinnovate" => array(
        "link" => 'https://agence-verseinnovate.lpmiaw.univ-lr.fr/',
        "image" => 'public/img/Agences/2023-2024/VerseInnovate.png'
    ),
    "Webforgeurs" => array(
        "link" => 'https://agence-webforgeurs.lpmiaw.univ-lr.fr/',
        "image" => 'public/img/Agences/2023-2024/webForgeurs.png'
    ),
    "WebMarmottes" => array(
        "link" => 'https://agence-webmarmottes.lpmiaw.univ-lr.fr/',
        "image" => 'public/img/Agences/2023-2024/webMarmottes.png'
    ),
    "Wizeus" => array(
        "link" => 'https://agence-wizeus.lpmiaw.univ-lr.fr/',
        "image" => 'public/img/Agences/2023-2024/Wizeus.png'
    ),
    "Wizeseus" => array(
        "link" => 'https://agence-wizeus.lpmiaw.univ-lr.fr/',
        "image" => 'public/img/Agences/2023-2024/Wizeus.png'
    ),

)

?>


<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Agences des étudiants</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="public/scss/master.css">

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>
    <script src="public/js/main.js" defer></script>
</head>
<body>


<nav class="nav-desktop">
    <ul class="nav-menu">
        <li class="nav-menu__element">
            <a class="nav-menu__link " href="index.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="lucide lucide-home">
                    <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                    <polyline points="9 22 9 12 15 12 15 22"/>
                </svg>
                <p class="nav-menu__text nav-menu__text--active">Accueil</p></a>
        </li>
        <li class="nav-menu__element ">
            <a class="nav-menu__link nav-menu__link--active" href="agence.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="lucide lucide-graduation-cap">
                    <path d="M22 10v6M2 10l10-5 10 5-10 5z"/>
                    <path d="M6 12v5c3 3 9 3 12 0v-5"/>
                </svg>
                <p class="nav-menu__text nav-menu__text--inactive">Agences</p></a>
        </li>
    </ul>
</nav>
<nav class="nav-mobile">
    <ul class="nav-menu">
        <li class="nav-menu__element">
            <a class="nav-menu__link nav-menu__link" href="index.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="lucide lucide-home">
                    <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                    <polyline points="9 22 9 12 15 12 15 22"/>
                </svg>
                <p class="nav-menu__text nav-menu__text">Accueil</p></a>
        </li>
        <li class="nav-menu__element">
            <a class="nav-menu__link nav-menu__link--active" href="agence.php">
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
<main>
    <div class="swiper-pagination"></div>

    <div class="swiper">
        <div class="swiper-wrapper">

            <section class="projets swiper-slide">
                <h1 class="header__title">Agences des étudiants pour les projets tuteurés
                </h1>
                <h2 class="projets__title">Année 2023-2024</h2>
                <ul class="projets__agences">

                    <?php foreach ($agences2023 as $agence => $infos): ?>
                        <li class="agence">

                            <a target="_blank" href="<?= $infos['link'] ?>" class="agence__link">
                                <div class="agence__content">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none"
                                         stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                         class="agence__svg">
                                        <rect width="18" height="18" x="3" y="3" rx="2"/>
                                        <path d="M8 8h8v8"/>
                                        <path d="m8 16 8-8"/>
                                    </svg>
                                </div>
                                <p class="agence__name"><?= $agence ?></p>
                                <img class="agence__image" src="<?= $infos['image'] ?>" alt="">

                            </a>

                        </li>
                    <?php endforeach; ?>

                </ul>

            </section>
            <section class="projets projets--impair swiper-slide">
                <h2 class="projets__title">Année 2022-2023</h2>
                <ul class="projets__agences">
                    <?php foreach ($agences2023 as $agence => $infos): ?>
                        <li class="agence">

                            <a href="<?= $infos['link'] ?>" class="agence__link">
                                <div class="agence__content">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none"
                                         stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                         class="agence__svg">
                                        <rect width="18" height="18" x="3" y="3" rx="2"/>
                                        <path d="M8 8h8v8"/>
                                        <path d="m8 16 8-8"/>
                                    </svg>
                                </div>
                                <p class="agence__name"><?= $agence ?></p>
                                <img class="agence__image" src="<?= $infos['image'] ?>" alt="">

                            </a>

                        </li>
                    <?php endforeach; ?>

                </ul>

            </section>
        </div>
    </div>
</main>

</body>
</html>