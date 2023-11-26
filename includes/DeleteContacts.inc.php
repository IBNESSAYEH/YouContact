<?php



    // Include the database connection
    include("dbh.inc.php");
   
$id = $_GET['id'];
$id_user = $_GET['id_user'];
 
    // Prepare the SQL query with proper syntax and data binding
    if($id && $id_user){
        $sql = "DELETE FROM contacts WHERE id_user = '$id_user' AND id = '$id'";
    }else if($id_user){

        $sql = "DELETE FROM contacts WHERE id_user = '$id_user'";
    }else{
        header("Location: ../pages/contacts.php?id=" . $id_user);
    }

    // Check if the query is executed successfully
    if (mysqli_query($conn, $sql)) {
        header("Location: ../pages/contacts.php?id=" . $id_user);
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
