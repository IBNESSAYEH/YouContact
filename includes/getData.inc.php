<?php
   include("dbh.inc.php");
if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["id"])) {
    $id_user = $_GET["id"];
    $sql = "SELECT c.id, c.nom, c.prenom, c.numero_tel, c.email, c.date_ajout
            FROM contacts c, users u 
            WHERE c.id_user = u.id AND u.id = ?";
    
    // Prepare the SQL statement
    $stmt = mysqli_prepare($conn, $sql);
    // Bind the parameter
    mysqli_stmt_bind_param($stmt, "i", $id_user);
    
    // Execute the statement
    mysqli_stmt_execute($stmt);
    
    // Get the result
    $result = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($result) > 0) {
    ?>

    <div class="container mt-4">
        <div class="row">
            <div class="col-12">

            <?php
                    include_once("../components/modalFormAjoutContact.php")
                ?>

                <a href="../includes/DeleteContacts.inc.php?&id_user=<?php echo $id_user; ?>" class="btn btn-danger ml-2"><i class="fas fa-trash"></i> Supprimer Tout</a>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Nom</th>
                                <th scope="col">Prénom</th>
                                <th scope="col">Numéro de téléphone</th>
                                <th scope="col">Email</th>
                                <th scope="col">date d'ajout</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>




                        <?php


                        // output data of each row
                        while ($row = mysqli_fetch_assoc($result)) {


                            ?>


                            <tbody>

                                <tr>
                                    <td>
                                        <?php echo $row["nom"] ?>
                                    </td>
                                    <td>
                                        <?php echo $row["prenom"] ?>
                                    </td>
                                    <td>
                                        <?php echo $row["numero_tel"] ?>
                                    </td>
                                    <td>
                                        <?php echo $row["email"] ?>
                                    </td>
                                    <td>
                                        <?php echo $row["date_ajout"] ?>
                                    </td>
                                    <td>
                                       




  <!-- Button trigger modal -->
  <button type="button"  class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modal">
  <i class="fas fa-edit"></i>
                </button>

                <!-- Modal -->
                <div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-dark" id="exampleModalLabel">Enter New Contact</h5>
                            </div>
                            <div class="modal-body">
                                <div class="container">
                                    <form action="../includes/updateContact.inc.php?id=<?php echo $row['id']; ?>&id_user=<?php echo $id_user; ?>" method="POST" target="_self">
                                     <?php
                                         include('../components/formContactsContent.php')
                                     ?>
                                    </form>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>














                <a href="../includes/DeleteContacts.inc.php?id=<?php echo $row['id']; ?>&id_user=<?php echo $id_user; ?>" class="btn btn-sm btn-danger ml-2"><i class="fas fa-trash"></i></a>

                                    </td>
                                </tr>

                            </tbody>










                            <?php






                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <?php


} else { ?>



    <div class="row justify-content-center align-items center " style="min-height:90vh">

        <div class="container">
            <div class="alert alert-info" style="background-color: #6c63cc; color: white;">
                <strong>Sorry!</strong> You don't have any contacts. Please create an account to start adding contacts.
                
                

 
                <?php
                    include_once("../components/modalFormAjoutContact.php")
                ?>





            </div>
        </div>

    </div>





<?php }



// Close the database connection
mysqli_close($conn);}
// } else {
//     header("Location: ../index.php");
// }

?>