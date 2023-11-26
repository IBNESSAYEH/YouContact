<?php


  
   
    $id_user = $_GET["id_user"];

    // Include the database connection
    include("dbh.inc.php");

    // Prepare the SQL query with proper syntax and data binding
    $sql = "SELECT nom, prenom, numero_tel, email, date_inscription FROM users where id ='$id_user' ";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $row = mysqli_fetch_assoc($result);

?>
        <h2 class="profile-name "><?php
         echo   $row['nom'] . " " . $row['prenom']
        ?></h2>
          <p class="profile-text "><strong>Phone:</strong> <?php
         echo   $row['numero_tel']
        ?></p>
          <p class="profile-text text-start "><strong>Email:</strong> <?php
         echo   $row['email']
        ?></p>
          <p class="profile-text "><strong>Date d'inscription:</strong> <?php
         echo   $row['date_inscription']
        ?></p>


<?php
    

    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);

?>