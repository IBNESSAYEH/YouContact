<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $telephone = $_POST["telephone"];
    $email = $_POST["email"];

    // Include the database connection
    include("dbh.inc.php");
   

    // Prepare the SQL query with proper syntax and data binding
    $sql = "INSERT INTO contacts (
        nom,	prenom,	numero_tel,	email,	date_ajout,	id_user	
        )
    VALUES ('$nom', '$prenom', '$telephone', '$email', CURDATE() , 1)";

    // Check if the query is executed successfully
    if (mysqli_query($conn, $sql)) {
        header("Location: ../pages/contacts.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
} else {
    header("Location: ../index.php");
}
?>