<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $telephone = $_POST["telephone"];
    $email = $_POST["email"];
    // Validate and sanitize the id_user parameter
    $id_user = isset($_GET["id"]) ? intval($_GET["id"]): 0; // Assuming 0 as default if id is not provided

    // Include the database connection
    include("dbh.inc.php");

    // Prepare the SQL query with parameter binding
    $sql = "INSERT INTO contacts (nom, prenom, numero_tel, email, date_ajout, id_user)
            VALUES (?, ?, ?, ?, CURDATE(), ?)";
    
    // Prepare the statement
    $stmt = mysqli_prepare($conn, $sql);

    // Bind the parameters
    mysqli_stmt_bind_param($stmt, "ssssi", $nom, $prenom, $telephone, $email, $id_user);

    // Execute the statement
    try {
        if (mysqli_stmt_execute($stmt)) {
            header("Location: ../pages/contacts.php?id=" . $id_user);
        } else {
            echo "Error: Unable to execute the statement";
        }
    } catch (mysqli_sql_exception $e) {
        // Handle the foreign key constraint violation error
        echo "Error: Unable to add or update a child row. Foreign key constraint violated.";
    }

    // Close the statement and the database connection
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} else {
    header("Location: ../index.php");
}
?>
