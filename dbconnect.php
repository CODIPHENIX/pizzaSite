<?php
function connectDB($servername,$username,$password,$database){
   try{
// create instance
        $conn = new mysqli($servername,$username,$password,$database);
    }
// check connection
catch(Exception $e){
   die ("connection failed");
}
    return $conn;
}
function getpizza(){
    // connect database
    $conn_recup= connectDB("localhost","root","","pizzainnodb");
    // query select all pizza
    $sql_allpizza = "select * from pizza";
    // execute la requete

    $result_allpizza=$conn_recup->query($sql_allpizza);

    return $result_allpizza;

}
function getlivreur(){
    // connect database
    $conn_recup= connectDB("localhost","root","","pizzainnodb");
    // query select all livreur
    $sql_all_livreur = "select * from livreur";
    // execute la requete

    $result_all_livreur=$conn_recup->query($sql_all_livreur);

    return $result_all_livreur;

}
function getclient(){
    // connect database
    $conn_recup= connectDB("localhost","root","","pizzainnodb");
    // query select all client
    $sql_all_client = "select * from client";
    // execute la requete

    $result_all_client=$conn_recup->query($sql_all_client);

    return $result_all_client;

}
?>