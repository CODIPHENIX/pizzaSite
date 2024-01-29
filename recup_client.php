<?php
session_start();
include_once('dbconnect.php');


// ajouter une client 
if (isset($_POST['submit_client'])) {
   // insert new client in db
   $name = mysqli_escape_string($conn, $_POST['nomclient']);
   $prenom_clt = mysqli_escape_string($conn, $_POST['pnomclient']);
   $address = mysqli_escape_string($conn, $_POST['adclient']);
   $ville = mysqli_escape_string($conn, $_POST['villeclt']);
   $code_postal = $_POST['cpclt'];
   $titre = $_POST['Titreclt'];
   $telephone = $_POST['phone'];
   

   $query_addclient = "INSERT INTO client(NOMCLIE,PRENOMCLIE,ADRESSECLIE,VILLECLIE,CODEPOSTALCLIE,TITRECLIE,NROTELCLIE) VALUES
     ('$name','$prenom_clt','$address','$ville','$code_postal','$titre','$telephone')";

   $run_query = mysqli_query($conn, $query_addclient);

   //  insert image in folder
   $last_inserted_id = mysqli_insert_id($conn);

   $dossier = 'asset/img_client/';
   $nomfichier = $last_inserted_id.$name . '.jpg';

   if (move_uploaded_file($_FILES['imgclient']['tmp_name'], $dossier . $nomfichier)) {

   } else {
      $_SESSION['message'] = "Erreur lors du téléchargement de l'image.";


   }
   if ($run_query) {
      $_SESSION['message'] = "Nouveau client ajoutée à la base de données avec succès.";

      header("location:client.php");
      exit(0);

   } else {
      $_SESSION['message'] = "L'ajout du nouveau client a échoué.";
      header("location:client.php");
      exit(0);
   }
}
// modifier les donnée de la client 
if (isset($_POST['click_edit_btn'])) {
    $client_id = $_POST['client_id'];
    $query = "SELECT * FROM client WHERE NROCLIE='$client_id'";
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

  // mise a jour des donnée de la  client 
if (isset($_POST['update_client'])) {
   // Récupère les valeurs du formulaire
   $client_id = $_POST['client_id'];
   $name = mysqli_escape_string($conn, $_POST['nomclient']);
   $prenom_clt = mysqli_escape_string($conn, $_POST['pnomclient']);
   $address = mysqli_escape_string($conn, $_POST['adclient']);
   $ville = mysqli_escape_string($conn, $_POST['villeclt']);
   $code_postal = $_POST['cpclt'];
   $titre = $_POST['Titre_clt'];
   $telephone = $_POST['phone'];

   // Construction de la requête SQL pour mettre à jour la client
   $query_updateclient = "UPDATE client SET NOMCLIE='$name', PRENOMCLIE='$prenom_clt', ADRESSECLIE='$address', VILLECLIE='$ville', CODEPOSTALCLIE='$code_postal', TITRECLIE='$titre', NROTELCLIE='$telephone' WHERE NROCLIE='$client_id'";

   // Exécute la requête SQL pour mettre à jour la client dans la base de données
   $run_updatequery = mysqli_query($conn, $query_updateclient);

   if ($run_updatequery) {
      if (isset($_FILES['imgclient']['tmp_name'])) {
         $dossier = 'asset/img_client/';
         $nomfichier = $client_id.$name  . '.jpg';

         if (move_uploaded_file($_FILES['imgclient']['tmp_name'], $dossier . $nomfichier)) {

         } else {
            $_SESSION['message'] = "Erreur lors du téléchargement de l'image.";
         }
      }
      $_SESSION['message'] = "mise a jour effectué avec succes.";

      header("location:client.php");
      exit(0);
   } else {
      $_SESSION['message'] = "echec de la mise a jour.";
      header("location:client.php");
      exit(0);
   }
}
?>