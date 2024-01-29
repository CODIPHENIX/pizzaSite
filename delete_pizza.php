<?php
session_start();
include_once("dbconnect.php");
// Supprimer les donnée de la pizza
'<a href="index.php" >BACK</a>';
if (isset($_POST['click_delete_btn'])) {
    $pizza_id = $_POST['pizza_id'];

    $delete_query = "DELETE FROM pizza WHERE NROPIZZ='$pizza_id'";
    $delete_query_run = mysqli_query($conn, $delete_query);
    var_dump($delete_query_run);

    if ($delete_query_run) {
        $_SESSION['message'] = "la pizza a bien éter supprimer.";

    } else {
        $_SESSION['message'] = "la pizza n'a pas pu etre supprimer.";

    }
    header("Location: index.php");
    exit();
}
?>