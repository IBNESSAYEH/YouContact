<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style/accueil.css">
    <title>Document</title>
</head>
<body>
    <!-- navbar du site -->
    <nav class="nav">
        <div class="nav__container container p-2">
            <div class="row justify-content-between">
                <div class="col text-start">
                    <a class="nav__logo navbar-brand" href="#"><span>You</span>Contact</a>
                </div>
                <div class="col text-end">
                    <a href="pages/login.php" class='nav__link  '>log in</a>
                    <a href="pages/inscription.php" class='nav__button'>connection</a>
                </div>
            </div>
        </div>
    </nav>
<!--   -->
<main class="cotainer-fluid">
    <section class="row main__section ">
        <div class="col main__section__imgs d-flex justify-content-around align-items-center">
            <img  src="images/TaskDetail.png" alt="">
            <img  src="images/UserStory.png" alt="">
        </div>
        <div class="col main__section__info d-flex flex-column  justify-content-around align-items-center ">
            <div class="w-50 col-12 ">
            <img class="w-100" src="images/image.png" alt="">
            </div>
            <div class="w-75 col-12 ">
                <p>
                "Bienvenue sur notre projet de gestion de contacts ! Simplifiez votre communication et restez organisé avec notre plateforme conviviale."
"Gérez efficacement tous vos contacts en un seul endroit avec notre système de gestion de contacts intuitif."
"Prenez le contrôle de vos contacts et construisez des relations solides avec notre solution complète de gestion de contacts."
                </p>
            </div>
        </div>

    </section>

</main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>