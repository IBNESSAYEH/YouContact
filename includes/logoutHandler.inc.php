<?php



    // Include the database connection
    include("dbh.inc.php");
   
$id_user = $_GET['id_user'];
    // Prepare the SQL query with proper syntax and data binding
    if($id_user){
        $sql = "DELETE FROM users,contacts WHERE users.id = contacts.id_user AND users.id =  '$id_user'";
        header("Location: ../index.php");
    }else{

        header("Location: ../index.php");
    }

    // Check if the query is executed successfully
    if (mysqli_query($conn, $sql)) {
        header("Location: ../index.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);