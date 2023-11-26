<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="../style/profile.css">
  <title>Profile Page</title>
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
     
        <div class="col-12 col-md-6 ">
          <img src="../images/profile.jpg" alt="Profile Picture" class="profile-pic">
        <div class="profile-info t">
          <?php
              include("../includes/Profile.inc.php");
          ?>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
