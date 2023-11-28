<?php
$host = "localhost";  
$name = "root";
$pass = "";
$db = "youcontact";

$conn = mysqli_connect($host, $name, $pass, $db);



$nom	= "abdellatif"; 
$prenom	= "ibnessayeh"; 
$numero_tel	= "066666666666666"; 
$email	= "abdellatif@gmail.com"; 
$date_inscription	= "2023-12-12"; 
$mot_passe	= "aaaaaaa&&&&&&&"; 

$sql = "INSERT INTO users (nom, prenom, numero_tel, email, mot_passe, date_inscription) VALUES (?, ?, ?, ?, ?, CURDATE())";

$stmt = mysqli_prepare($conn, $sql);

// Bind the parameters
mysqli_stmt_bind_param($stmt, "sssss", $nom	,$prenom	, $numero_tel	, $email	,  $mot_passe	);


try {
    if (mysqli_stmt_execute($stmt)) {
        echo "Error: Unable to execute the statement";
    } else {
        echo "Error: Unable to execute the statement";
    }
} catch (mysqli_sql_exception $e) {
    // Handle the foreign key constraint violation error
    echo "Error: Unable to add or update a child row. Foreign key constraint violated.";
}




?>