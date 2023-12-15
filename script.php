<?php
$toutesagences['2023/2024']=explode(' ',exec('members projet2324'));
$toutesagences['2022/2023']=explode(' ',exec('members projet2223'));
$toutesagences['2021/2022']=explode(' ',exec('members projet2122'));
$toutesagences['2020/2021']=explode(' ',exec('members projet2021'));
$toutesagences['2019/2020']=explode(' ',exec('members projet1920'));
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Agences des étudiants</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="agences.php" title="Agences des étudiants">Agences</a></li>
        </ul>
    </nav>
</header>
<main>
    <section>
        <h1>Les agences créées par les étudiants de la licence professionnelle</h1>
        <?php
        foreach ($toutesagences as $annee => $agences) :
            sort($agences);
            ?>
            <h2>Pour les projets tuteurés - <?= $annee ?></h2>
            <ul>
                <?php foreach($agences as $agence) : ?>
                    <li><a href="https://agence-<?= $agence ?>.lpmiaw.univ-lr.fr/"><?= $agence ?></a></li>
                <?php endforeach; ?>
            </ul>
        <?php endforeach; ?>
    </section>
</main>
</body>
</html>