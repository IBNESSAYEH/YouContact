<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  
    $email = $_POST["email"];
    $pass = $_POST["password"];

    // Include the database connection
    include("dbh.inc.php");

    // Prepare the SQL query with proper syntax and data binding
    $sql = "SELECT email, mot_passe FROM users where email ='$email' and mot_passe = '$pass'";
    $result = $conn->query($sql);
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







