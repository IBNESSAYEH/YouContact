<?php

// if ($_SERVER["REQUEST_METHOD"] === "POST") {

// $email = $_POST["email"];
// $pass = $_POST["password"];

// Include the database connection
include("dbh.inc.php");

// Prepare the SQL query with proper syntax and data binding
$sql = "SELECT 	 nom,	prenom,	numero_tel,	email,	date_ajout
     FROM contacts ";
$result = $conn->query($sql);


if (mysqli_num_rows($result) > 0) {
    ?>

    <div class="container mt-4">
        <div class="row">
            <div class="col-12">


                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="fas fa-plus"></i> Ajouter
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Enter New Contact</h5>
                            </div>
                            <div class="modal-body">
                                <div class="container">
                                    <form action="../includes/formContactsHandler.inc.php" method="POST">
                                        <div class="mb-3">
                                            <label for="nom" class="form-label">Nom</label>
                                            <input type="text" class="form-control" name="nom">
                                        </div>
                                        <div class="mb-3">
                                            <label for="prenom" class="form-label">Prénom</label>
                                            <input type="text" class="form-control" name="prenom">
                                        </div>
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" name="email">
                                        </div>
                                        <div class="mb-3">
                                            <label for="numero" class="form-label">Numéro de téléphone</label>
                                            <input type="tel" class="form-control" name="telephone">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>





                <a href="../includes/DeleteContacts.inc.php" class="btn btn-danger ml-2"><i class="fas fa-trash"></i> Supprimer Tout</a>
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
                                    <form action="../includes/updateContact.inc.php" method="POST" target="_self">
                                        <div class="mb-3">
                                            <label for="nom" class="form-label text-dark">Nom</label>
                                            <input type="text" class="form-control" name="nom">
                                        </div>
                                        <div class="mb-3">
                                            <label for="prenom" class="form-label text-dark">Prénom</label>
                                            <input type="text" class="form-control" name="prenom">
                                        </div>
                                        <div class="mb-3">
                                            <label for="email" class="form-label text-dark">Email</label>
                                            <input type="email" class="form-control" name="email">
                                        </div>
                                        <div class="mb-3">
                                            <label for="numero" class="form-label text-dark">Numéro de téléphone</label>
                                            <input type="tel" class="form-control" name="telephone">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>














                                        <a href="../pages/updateContact" class="btn btn-sm btn-danger ml-2"><i class="fas fa-trash"></i></a>
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
                
                

  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="fas fa-plus"></i> Ajouter
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-dark" id="exampleModalLabel">Enter New Contact</h5>
                            </div>
                            <div class="modal-body">
                                <div class="container">
                                    <form action="../includes/formContactsHandler.inc.php" method="POST">
                                        <div class="mb-3">
                                            <label for="nom" class="form-label text-dark">Nom</label>
                                            <input type="text" class="form-control" name="nom">
                                        </div>
                                        <div class="mb-3">
                                            <label for="prenom" class="form-label text-dark">Prénom</label>
                                            <input type="text" class="form-control" name="prenom">
                                        </div>
                                        <div class="mb-3">
                                            <label for="email" class="form-label text-dark">Email</label>
                                            <input type="email" class="form-control" name="email">
                                        </div>
                                        <div class="mb-3">
                                            <label for="numero" class="form-label text-dark">Numéro de téléphone</label>
                                            <input type="tel" class="form-control" name="telephone">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>





            </div>
        </div>

    </div>





<?php }



// Close the database connection
mysqli_close($conn);
// } else {
//     header("Location: ../index.php");
// }

?>