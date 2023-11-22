<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Page de connexion</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style/inscription.css">

</head>

<body>
    <div class="form-container">
        <h2>Connexion</h2>
        <form class='row px-5 justify-content-center' action="../includes/formInscriptionHandler.inc.php" method="POST">
            <div class="col-12 col-md-6">
                 <div class="form-group text-center">
                <label for="nom">Nom:</label>
                <input type="text" id="nom" name="nom" class="w-1OO" required>
            </div>
            <div class="form-group text-center">
                <label for="prenom">Prénom:</label>
                <input type="text" id="prenom" name="prenom" required>
            </div>
            <div class="form-group text-center">
                <label for="telephone">Numéro de téléphone:</label>
                <input type="tel" id="telephone" name="telephone" required>
            </div>
          
            </div>
            <div class="col-12 col-md-6">
                  <div class="form-group text-center">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div> 
  <div class="form-group text-center">
                <label for="exampleInputPassword1">Password:</label>
                <input type="password" name="password" id="exampleInputPassword1">
            </div>
            <div class="form-group text-center">
                <label for="exampleInputPassword1">Confirme Password:</label>
                <input type="password" name="validatepassword"  id="exampleInputPassword1">
            </div>
            </div>
          
          
            <button type="submit" class="btn btn-primary">Se connecter</button>
        </form>
    </div>
</body>

</html>