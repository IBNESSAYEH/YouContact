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
        <h2>Log in</h2>
        <form class='row px-5 justify-content-center'>
         
            <div class="col-12 ">
                  <div class="form-group text-center">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div> 
            <div class="form-group text-center">
                <label for="exampleInputPassword1">Password:</label>
                <input type="password" id="exampleInputPassword1" >
            </div>
            </div>
          
          
            <button type="submit" class="btn btn-primary">Se connecter</button>
        </form>
    </div>
</body>

</html>