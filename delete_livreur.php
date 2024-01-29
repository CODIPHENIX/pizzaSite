<?php
session_start();
include_once("dbconnect.php");
// Supprimer les donnée de la livreur
echo 
'<a href="livreur.php" >BACK</a>';

if (isset($_POST['click_delete_btn'])) {
    $livreur_id = $_POST['livreur_id'];

    $delete_query = "DELETE FROM livreur WHERE NROLIVR='$livreur_id'";
    $delete_query_run = mysqli_query($conn, $delete_query);
    var_dump($delete_query_run);

    if ($delete_query_run) {
        $_SESSION['message'] = "la livreur a bien éter supprimer.";

    } else {
        $_SESSION['message'] = "la livreur n'a pas pu etre supprimer.";

    }
    header("location:livreur.php");
    exit();
}
?>