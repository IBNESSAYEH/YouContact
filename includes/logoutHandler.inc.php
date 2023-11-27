<?php



    // Include the database connection
    include("dbh.inc.php");
   
    $id_user = isset($_GET["id"]) ? intval($_GET["id"]): 0;
    // Prepare the SQL query with proper syntax and data binding
    if($id_user){
        header("Location: ../index.php?id=");
    }else{

        header("Location: ../pages/contacts.php?id=" . $id_user);
    }

    // Check if the query is executed successfully
    if (mysqli_query($conn, $sql)) {
        header("Location: ../index.php?id=");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);