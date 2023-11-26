<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $telephone = $_POST["telephone"];
    $email = $_POST["email"];

    // Include the database connection
    include("dbh.inc.php");
   

    // Prepare the SQL query with proper syntax and data binding
    $sql = "UPDATE contacts SET nom =  '$nom'  , prenom =  '$prenom'  , numero_tel =  '$telephone'  , email =  '$email'    , date_ajout = CURDATE() WHERE id = 22";

    // Check if the query is executed successfully
    if (mysqli_query($conn, $sql)) {
        header("Location: ../pages/contacts.php" );
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
} else {
    header("Location: ../index.php");
}
?>
