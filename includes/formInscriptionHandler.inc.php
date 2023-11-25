<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $telephone = $_POST["telephone"];
    $email = $_POST["email"];
    $pass = $_POST["password"];

    // Include the database connection
    include("dbh.inc.php");
   

    // Prepare the SQL query with proper syntax and data binding
    $sql = "INSERT INTO users (nom, prenom, numero_tel, email, mot_passe, date_inscription)
    VALUES ('$nom', '$prenom', '$telephone', '$email', '$pass', CURDATE())";

    // Check if the query is executed successfully
    if (mysqli_query($conn, $sql)) {
        header("Location: ../pages/login.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
} else {
    header("Location: ../index.php");
}
?>
