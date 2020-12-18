<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../public/css/sondageConsult.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    <title>Sondage</title>
</head>

<body>
    <div class="header">
        <div class="accueil">
            <a href="?page=home">
                <p>ACCUEIL</p>
            </a>
        </div>
        <div class="connect">
            <p>Score</p>
        </div>
    </div>
    <div class="container">
        <div class="top">
            <img src="../public/assets/discuss.png" alt="img discuss">
            <img src="../public/assets/discuss.png" alt="img discuss">
        </div>
        <br>
        <div class="consult">
            <p>SONDAGES : </p>
        </div>
        <div class="hashtag">
            <p>Thème : #</p>
            <input type="text" placeholder="votre thème">
        </div>
        <div class="sondageBox">

            <?php
            foreach ($sondages as $sondage) { ?>
                <div class="sondage">
                <div class="profil">
                    <img src="../public/assets/profil.png" alt="profil">
                    <p>utilisateur</p>
                </div>
                <div class="sondageContent">
                    <p id="link">Titre : <?php echo $sondage->titre; ?></p>
                    <p><a href="?page=sondage&sondage=<?php echo $sondage->id; ?>">Consulter &raquo;</a></p>
                </div>
            </div>
            <?php }
            ?>
        </div>
    </div>
    <div class="mention">
        <p>Site Web réalisé et administré dans le cadre d'un projet scolaire par : <br> OOFMAN LE BOSS </p>
    </div>
    <script src="js/sondageScore.js"></script>
</body>

</html>