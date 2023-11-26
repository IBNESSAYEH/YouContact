<?php



    // Include the database connection
    include("dbh.inc.php");
   
$id_user = $_GET['id'];
    // Prepare the SQL query with proper syntax and data binding
    if($id_user){
        $sql = "DELETE FROM users WHERE id =  '$id_user'";
        // header("Location: ../index.php");
    }else{

        header("Location: ../pages/contacts.php?id=" . $id_user);
    }

   

    // Close the database connection
    mysqli_close($conn);