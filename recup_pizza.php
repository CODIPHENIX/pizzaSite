<?php
session_start();
include_once('dbconnect.php');


// ajouter une pizza 
if (isset($_POST['submit_pizza'])) {
   // insert new pizza in db
   $name = mysqli_escape_string($conn, $_POST['nompizza']);
   $prixpizza = $_POST['prixpizza'];

   $query_addpizza = "INSERT INTO pizza(DESIGNPIZZ,TARIFPIZZ) VALUES
     ('$name','$prixpizza')";

   $run_query = mysqli_query($conn, $query_addpizza);

   //  insert image in folder
   $last_inserted_id = mysqli_insert_id($conn);

   $dossier = 'asset/img_pizza/';
   $nomfichier = $last_inserted_id . '.jpg';

   if (move_uploaded_file($_FILES['imgpizza']['tmp_name'], $dossier . $nomfichier)) {

   } else {
      $_SESSION['message'] = "Erreur lors du téléchargement de l'image.";


   }
   if ($run_query) {
      $_SESSION['message'] = "Nouvelle pizza ajoutée à la base de données avec succès.";

      header("location:index.php");
      exit(0);

   } else {
      $_SESSION['message'] = "L'ajout de la nouvelle pizza a échoué.";
      header("location:index.php");
      exit(0);
   }
}
// modifier les donnée de la pizza 
if (isset($_POST['click_edit_btn'])) {
   $pizza_id = $_POST['pizza_id'];
   $query = "SELECT * FROM pizza WHERE NROPIZZ='$pizza_id'";
   $query_run = mysqli_query($conn, $query);
   $arrayresult = [];

   if ($query_run && mysqli_num_rows($query_run) > 0) {
      while ($row = mysqli_fetch_array($query_run)) {

         array_push($arrayresult, $row);
         header('Content-Type: application/json');
         echo json_encode($arrayresult);


      }

   } else {
      echo "Aucune donnée trouvée.";
   }
}
// mise a jour des donnée de la  pizza 
if (isset($_POST['update_pizza'])) {
   // Récupère les valeurs du formulaire
   $pizza_id = $_POST['pizza_id'];
   $name = mysqli_real_escape_string($conn, $_POST['nompizza']);
   $prixpizza = $_POST['prixpizza'];

   // Construction de la requête SQL pour mettre à jour la pizza
   $query_updatepizza = "UPDATE pizza SET DESIGNPIZZ='$name', TARIFPIZZ='$prixpizza' WHERE NROPIZZ='$pizza_id'";

   // Exécute la requête SQL pour mettre à jour la pizza dans la base de données
   $run_updatequery = mysqli_query($conn, $query_updatepizza);

   if ($run_updatequery) {
      if (isset($_FILES['imgpizza']['tmp_name'])) {
         $dossier = 'asset/img_pizza/';
         $nomfichier = $pizza_id . '.jpg';

         if (move_uploaded_file($_FILES['imgpizza']['tmp_name'], $dossier . $nomfichier)) {

         } else {
            $_SESSION['message'] = "Erreur lors du téléchargement de l'image.";
         }
      }
      $_SESSION['message'] = "mise a jour effectué avec succes.";

      header("location:index.php");
      exit(0);
   } else {
      $_SESSION['message'] = "echec de la mise a jour.";
      header("location:index.php");
      exit(0);
   }
}
// Supprimer les donnée de la pizza
if (isset($_POST['click_delete_btn'])) {
   $pizza_id = $_POST['pizza_id'];

   $delete_query = "DELETE fROM pizza WHERE NROPIZZ='$pizza_id'";
   $delete_query_run = mysqli_query($conn, $delete_query);

   if ($delete_query_run) {
      $_SESSION['message'] = "la pizza a bien éter supprimer.";

      header("location:index.php");
      exit(0);

   } 
   else {
      $_SESSION['message'] = "la pizza n'a pas pu etre supprimer.";
      header("location:index.php");
      exit(0);

   }
}

?>