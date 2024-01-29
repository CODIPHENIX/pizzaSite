<?php
session_start();
include_once('dbconnect.php');


// ajouter une livreur 
if (isset($_POST['submit_livreur'])) {
   // insert new livreur in db
   $name = mysqli_escape_string($conn, $_POST['nomlivreur']);
   $prenom_lvr = mysqli_escape_string($conn, $_POST['pnomlivreur']);
   $date_em = $_POST['embauche_d'];
   

   $query_addlivreur = "INSERT INTO livreur(NOMLIVR,PRENOMLIVR,DATEEMBAUCHLIVR) VALUES
     ('$name','$prenom_lvr','$date_em')";

   $run_query = mysqli_query($conn, $query_addlivreur);

   //  insert image in folder
   $last_inserted_id = mysqli_insert_id($conn);

   $dossier = 'asset/img_livreur/';
   $nomfichier = $last_inserted_id.$name . '.jpg';

   if (move_uploaded_file($_FILES['imglivreur']['tmp_name'], $dossier . $nomfichier)) {

   } else {
      $_SESSION['message'] = "Erreur lors du téléchargement de l'image.";


   }
   if ($run_query) {
      $_SESSION['message'] = "Nouveau livreur ajoutée à la base de données avec succès.";

      header("location:livreur.php");
      exit(0);

   } else {
      $_SESSION['message'] = "L'ajout du nouveau livreur a échoué.";
      header("location:livreur.php");
      exit(0);
   }
}
// modifier les donnée de la livreur 
if (isset($_POST['click_edit_btn'])) {
    $livreur_id = $_POST['livreur_id'];
    $query = "SELECT * FROM livreur WHERE NROLIVR='$livreur_id'";
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

 // mise a jour des donnée de la  livreur 
if (isset($_POST['update_livreur'])) {
    // Récupère les valeurs du formulaire
    $livreur_id = $_POST['livreur_id'];
    $name = mysqli_escape_string($conn, $_POST['nomlivreur']);
    $prenom_lvr = mysqli_escape_string($conn, $_POST['pnomlivreur']);
    $date_em = $_POST['embauche_d'];
 
    // Construction de la requête SQL pour mettre à jour la livreur
    $query_updatelivreur = "UPDATE livreur SET NOMLIVR='$name', PRENOMLIVR='$prenom_lvr', DATEEMBAUCHLIVR='$date_em' WHERE NROLIVR='$livreur_id'";
 
    // Exécute la requête SQL pour mettre à jour la livreur dans la base de données
    $run_updatequery = mysqli_query($conn, $query_updatelivreur);
 
    if ($run_updatequery) {
       if (isset($_FILES['imglivreur']['tmp_name'])) {
          $dossier = 'asset/img_livreur/';
          $nomfichier = $livreur_id.$name  . '.jpg';
 
          if (move_uploaded_file($_FILES['imglivreur']['tmp_name'], $dossier . $nomfichier)) {
 
          } else {
             $_SESSION['message'] = "Erreur lors du téléchargement de l'image.";
          }
       }
       $_SESSION['message'] = "mise a jour effectué avec succes.";
 
       header("location:livreur.php");
       exit(0);
    } else {
       $_SESSION['message'] = "echec de la mise a jour.";
       header("location:livreur.php");
       exit(0);
    }
 }
?>