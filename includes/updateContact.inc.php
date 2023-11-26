<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $telephone = $_POST["telephone"];
    $email = $_POST["email"];
   
    $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
    $id_user = isset($_GET["id_user"]) ? intval($_GET["id_user"]) : 0;
    // Include the database connection
    include("dbh.inc.php");
   

    // Prepare the SQL query with proper syntax and data binding
    $sql = "UPDATE contacts SET nom =  '$nom'  , prenom =  '$prenom'  , numero_tel =  '$telephone'  , email =  '$email'    , date_ajout = CURDATE() WHERE id = '$id'";

    // Check if the query is executed successfully
    if (mysqli_query($conn, $sql)) {
        header("Location: ../pages/contacts.php?id=" . $id_user);
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
} else {
    header("Location: ../index.php");
}
?>
