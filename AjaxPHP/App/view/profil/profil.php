<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../public/css/profil.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>

    <div class="container">
        <h1> <?php echo $user[0]->pseudo; ?></h1>
        <h2> <?php echo $user[0]->email; ?></h2>
        <a href="?page=editProfil">Editer ton profil</a>
        <a href="?page=deconnexion">Deconnexion</a>
    </div>
</body>

</html>