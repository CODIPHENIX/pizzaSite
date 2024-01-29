<?php
session_start();
include_once("dbconnect.php");
// Supprimer les donnée de le client
echo 
'<a href="client.php" >BACK</a>';

if (isset($_POST['click_delete_btn'])) {
    $client_id = $_POST['client_id'];

    $delete_query = "DELETE FROM client WHERE NROCLIE='$client_id'";
    $delete_query_run = mysqli_query($conn, $delete_query);
    var_dump($delete_query_run);

    if ($delete_query_run) {
        $_SESSION['message'] = "le client a bien éter supprimer.";

    } else {
        $_SESSION['message'] = "le client n'a pas pu etre supprimer.";

    }
    header("location:client.php");
    exit();
}
?>