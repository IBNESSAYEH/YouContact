<?php



    // Include the database connection
    include("dbh.inc.php");
   
$id = $_GET['id'];
    // Prepare the SQL query with proper syntax and data binding
    if($id){
        $sql = "DELETE FROM contacts WHERE id = '$id'";
    }else{

        $sql = "DELETE FROM contacts ";
    }

    // Check if the query is executed successfully
    if (mysqli_query($conn, $sql)) {
        header("Location: ../pages/contacts.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
