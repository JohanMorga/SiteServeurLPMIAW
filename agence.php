<?php

$toutesagences['2023-2024'] = explode(' ', exec('members projet2324'));
$toutesagences['2022-2023'] = explode(' ', exec('members projet2223'));
$toutesagences['2021-2022'] = explode(' ', exec('members projet2122'));
$toutesagences['2020-2021'] = explode(' ', exec('members projet2021'));
$toutesagences['2019-2020'] = explode(' ', exec('members projet1920'));

?>


<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png"
          href="https://cdn.discordapp.com/icons/1088100220094656512/fa0de0a1ac25c9c3e0bfce67f436ed74.webp?size=160"/>
    <title>Agences des étudiants</title>
    <link rel="stylesheet" href="public/scss/master.css">
    <script src="public/js/agence.js" defer></script>
</head>
<body>


<nav class="nav-desktop">
    <ul class="nav-menu">
        <li class="nav-menu__element">
            <a class="nav-menu__link nav-menu__link--home " href="index.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="lucide lucide-home icon__home">
                    <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                    <polyline points="9 22 9 12 15 12 15 22"/>
                </svg>
                <p class="nav-menu__text nav-menu__text--active nav-menu__text--hover">Accueil</p></a>
        </li>
        <li class="nav-menu__element ">
            <a class="nav-menu__link nav-menu__link--active" href="agence.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="lucide lucide-graduation-cap icon__agence">
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
<main class="content">
    <span class="main-fab">
        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24" fill="none"
             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
             class="lucide lucide-chevron-down-circle fab">
            <circle class="fab__circle" cx="12" cy="12" r="10" fill="none" stroke="currentColor"/>
            <path class="fab__path" d="m16 10-4 4-4-4"/>
        </svg>
    </span>
    <h1 class="header__title">Agences des étudiants pour les projets tuteurés
    </h1>
    <?php
    foreach (
        $toutesagences

        as $annee => $agences
    ) :
        sort($agences);
        ?>
        <section class="projets">

            <h2 class="projets__title">Année <?= $annee ?></h2>
            <ul class="projets__agences">

                <?php
                foreach ($agences as $agence) : ?>
                    <li class="agence">
                        <a target="_blank" href="https://agence-<?= $agence ?>.lpmiaw.univ-lr.fr/" class="agence__link">
                            <div class="agence__content">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                     viewBox="0 0 24 24"
                                     fill="none"
                                     stroke="white" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round"
                                     class="agence__svg">
                                    <rect width="18" height="18" x="3" y="3" rx="2"/>
                                    <path d="M8 8h8v8"/>
                                    <path d="m8 16 8-8"/>
                                </svg>
                            </div>
                            <p class="agence__name"><?= $agence ?></p>
                            <img class="agence__image" src="public/img/Agences/<?= $annee ?>/agence-<?= $agence ?>.webp"
                                 alt="">

                        </a>

                    </li>
                <?php
                endforeach; ?>
            </ul>
        </section>
    <?php
    endforeach; ?>

</main>

</body>
</html>
