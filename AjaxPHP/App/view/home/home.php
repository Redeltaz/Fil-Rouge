<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../public/css/home.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    <title>Sond'Avenir</title>
</head>

<body>
    <main>
        <div class="navResponsive">
            <p>MENU</p>
        </div>
        <div class="nav">
            <p><a href="?page=sondageConsult">SONDAGES</a></p>
            <?php if (!$_SESSION) { ?>
                <a href="?page=connexion">Connexion</a>
                <a href="?page=inscription">Inscription</a>
            <?php } ?>
            <?php
        if ($_SESSION) { ?>
            <?php
            if ($_SESSION['email'] == "admin@admin.com") { ?>
                <a href="?page=admin">Admin</a>
            <?php }
            ?>
            <a href="?page=profil"><?php echo ($_SESSION['pseudo']) ?></a>
            <a href="?page=amis">Amis</a>
            <a href="?page=deconnexion">Deconnexion</a>
        <?php }?>
        </div>
        <div class="header">
            <div class="background"></div>
            <h1>LOREM IPSUM <br>LOZAD?SQPCPOQF</h1>
        </div>
    </main>
    <div class="container">
        <div class="contentStart">
            <div class="content">
                <div class="button">
                    <p>Lorem</p>
                </div>
                <div class="divContent">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus nulla quia veritatis magnam
                        assumenda, iusto, at ad soluta quos nostrum blanditiis unde vitae voluptatum quas aut voluptate
                        ut
                        mollitia. Fuga, corrupti! Blanditiis sapiente a, vel alias laudantium quod delectus, fugiat
                        earum
                        architecto eos iusto iste tempora dolore officia quasi commodi.
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus nulla quia veritatis magnam
                        assumenda, iusto, at ad soluta quos nostrum blanditiis unde vitae voluptatum quas aut voluptate
                        ut
                        mollitia. Fuga, corrupti! Blanditiis sapiente a, vel alias laudantium quod delectus, fugiat
                        earum
                        architecto eos iusto iste tempora dolore officia quasi commodi.
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus nulla quia veritatis magnam
                        assumenda, iusto, at ad soluta quos nostrum blanditiis unde vitae voluptatum quas aut voluptate
                        ut
                        mollitia. Fuga, corrupti! Blanditiis sapiente a, vel alias laudantium quod delectus, fugiat
                        earum
                        architecto eos iusto iste tempora dolore officia quasi commodi.
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus nulla quia veritatis magnam
                        assumenda, iusto, at ad soluta quos nostrum blanditiis unde vitae voluptatum quas aut voluptate
                        ut
                        mollitia. Fuga, corrupti! Blanditiis sapiente a, vel alias laudantium quod delectus, fugiat
                        earum
                        architecto eos iusto iste tempora dolore officia quasi commodi.</p>
                </div>
            </div>
            <div class="line"></div>
            <div class="content">
                <div class="button">
                    <p>Lorem</p>
                </div>
                <div class="divContent">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus nulla quia veritatis magnam
                        assumenda, iusto, at ad soluta quos nostrum blanditiis unde vitae voluptatum quas aut voluptate
                        ut
                        mollitia. Fuga, corrupti! Blanditiis sapiente a, vel alias laudantium quod delectus, fugiat
                        earum
                        architecto eos iusto iste tempora dolore officia quasi commodi.
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus nulla quia veritatis magnam
                        assumenda, iusto, at ad soluta quos nostrum blanditiis unde vitae voluptatum quas aut voluptate
                        ut
                        mollitia. Fuga, corrupti! Blanditiis sapiente a, vel alias laudantium quod delectus, fugiat
                        earum
                        architecto eos iusto iste tempora dolore officia quasi commodi.
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus nulla quia veritatis magnam
                        assumenda, iusto, at ad soluta quos nostrum blanditiis unde vitae voluptatum quas aut voluptate
                        ut
                        mollitia. Fuga, corrupti! Blanditiis sapiente a, vel alias laudantium quod delectus, fugiat
                        earum
                        architecto eos iusto iste tempora dolore officia quasi commodi.
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus nulla quia veritatis magnam
                        assumenda, iusto, at ad soluta quos nostrum blanditiis unde vitae voluptatum quas aut voluptate
                        ut
                        mollitia. Fuga, corrupti! Blanditiis sapiente a, vel alias laudantium quod delectus, fugiat
                        earum
                        architecto eos iusto iste tempora dolore officia quasi commodi.</p>
                </div>
            </div>
            <div class="line"></div>
            <div class="content">
                <div class="button">
                    <p>Lorem</p>
                </div>
                <div class="divContent">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus nulla quia veritatis magnam
                        assumenda, iusto, at ad soluta quos nostrum blanditiis unde vitae voluptatum quas aut voluptate
                        ut
                        mollitia. Fuga, corrupti! Blanditiis sapiente a, vel alias laudantium quod delectus, fugiat
                        earum
                        architecto eos iusto iste tempora dolore officia quasi commodi.
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus nulla quia veritatis magnam
                        assumenda, iusto, at ad soluta quos nostrum blanditiis unde vitae voluptatum quas aut voluptate
                        ut
                        mollitia. Fuga, corrupti! Blanditiis sapiente a, vel alias laudantium quod delectus, fugiat
                        earum
                        architecto eos iusto iste tempora dolore officia quasi commodi.
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus nulla quia veritatis magnam
                        assumenda, iusto, at ad soluta quos nostrum blanditiis unde vitae voluptatum quas aut voluptate
                        ut
                        mollitia. Fuga, corrupti! Blanditiis sapiente a, vel alias laudantium quod delectus, fugiat
                        earum
                        architecto eos iusto iste tempora dolore officia quasi commodi.
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus nulla quia veritatis magnam
                        assumenda, iusto, at ad soluta quos nostrum blanditiis unde vitae voluptatum quas aut voluptate
                        ut
                        mollitia. Fuga, corrupti! Blanditiis sapiente a, vel alias laudantium quod delectus, fugiat
                        earum
                        architecto eos iusto iste tempora dolore officia quasi commodi.</p>
                </div>
            </div>
        </div>
    </div>
    <div id="end">
        <div class="end">
            <div class="endTrophy">
                <img src="../public/assets/trophéesArgent.png" alt="trophee" class="trophee oui">
                <p>LOOSER</p>
            </div>
            <div class="endTrophy">
                <img src="../public/assets/trophéesOr.png" alt="trophee" class="trophee">
                <p>WINNER</p>
            </div>
            <div class="endTrophy">
                <img src="../public/assets/trophéesBronze.png" alt="trophee" class="trophee oui">
                <p>LOOSER</p>
            </div>
        </div>
        <div class="number1">
            <h1>BECOME NUMBER 1</h1>
        </div>
    </div>
    <div class="mention">
        <p>Site Web réalisé et administré dans le cadre d'un projet scolaire par : <br> OOFMAN LE BOSS </p>
    </div>
</body>

</html>