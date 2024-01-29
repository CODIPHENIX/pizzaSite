<?php 
include_once("head.php");
?>
<body>
    <?php include('message.php'); ?>
    <?php include_once("modal_client.php"); ?>
    <!-- header with nav bar -->
    <header class="p-3 bg-secondary sticky-top">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
          <img src="asset/logo pizza-02.png" style="width:9.5rem; height:2.5rem" alt="logo">
        </a>
         <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control" name="search-client" placeholder="Search..." aria-label="Search">
        </form>

        <ul class="nav col-12 col-lg-auto ms-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="index.php" class="nav-link px-3 link-light">Pizza</a></li>
          <li><a href="livreur.php" class="nav-link px-3 link-light">Livreur</a></li>
          <li><a href="client.php" class="nav-link px-3 link-active">Client</a></li>
          <li><a href="#" class="nav-link px-3 link-light">Commande</a></li>
        </ul>
        <!-- dropdown menu  -->
        <div class="dropdown text-end">
          <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="asset/user.png" alt="mdo" width="30" height="30" class="">
          </a>
          <ul class="dropdown-menu text-small" >
        
            <li><a class="dropdown-item" href="#">Sign out</a></li>
          </ul>
        </div>
      </div>
    </div>
    </header>
    <!-- end header with nav bar --> 
    <!-- add client section  -->
    <section class="add-client py-2 bg-primary">
        <div class="container">
            <div class="d-flex flex-row-reverse ">          
            <a href="#" class="custom-btn a-btn" data-bs-toggle="modal" data-bs-target="#add_client_Modal">Ajouter</a>    
            </div>
        </div>
    </section>
    <!-- main section to display client  -->
    <section class="bg-secondary">
        <div class="container py-4">
           
            <?php
            include_once("dbconnect.php");
            $tableclient=getclient();
            while($row=$tableclient->fetch_assoc()){
            echo    '<div class="card mb-3 g-5">';
            echo    '<div class="row g-0">';
            echo    '<div class="col-12 col-lg-2 ">';
            echo        '<img src="./asset/img_client/'.$row['NROCLIE'].$row['NOMCLIE'].'.jpg" class="custom2-img" alt="...">';
            echo    '</div>';
            echo '<div class="col-12 col-lg-10 p-2 client">';
            echo            '<h5 class="card-title client_id" hidden>' . $row['NROCLIE'] . '</h5>';
            echo        '<div class="row">'; 
            echo        '<div class="col-12 col-md-7 col-lg-8 align-self-center">';
            echo            '<h6 class="card-title"><strong>Nom: </strong>'.$row['NOMCLIE'].'</h6>';
            echo            '<h6 class="card-title"><strong>Prenom: </strong>'.$row['PRENOMCLIE'].'</h6>';
            echo            '<h6 class="card-title"><strong>Adress: </strong>'.$row['ADRESSECLIE'].'</h6>';
            echo            '<h6 class="card-title"><strong>ville: </strong>'.$row['VILLECLIE'].'</h6>';
            echo            '<h6 class="card-title"><strong>Code Postale: </strong>'.$row['CODEPOSTALCLIE'].'</h6>';
            echo            '<h6 class="card-title"><strong>Titre: </strong>'.$row['TITRECLIE'].'</h6>';
            echo            '<h6 class="card-title"><strong>Telephone: </strong>'.$row['NROTELCLIE'].'</h6>';
            echo         '</div>';
           
            echo            '<div class="container col-12 col-md-5 col-lg-4 g-3 g-lg-0 mb-2 align-self-center mb-md-0">';          
            echo                '<a href="#" class="custom-btn bg-primary edit_clie">Modifier</a> ';
            echo                '<a href="#" class="custom-btn bg-secondary confirm_dlt_clie">Supprimer</a>';    
            echo            '</div>';
           
            echo         '</div>';
            echo    '</div>';
            echo    '</div>';
            echo    '</div>';

           
        }
            ?>
            
        </div>

    </section>
    

    <?php include_once("footer.php");?>
    <script>
    // modifier et mettre a jour les donné client 
    $(document).ready(function () {
      $('.edit_clie').click(function (e) {
        e.preventDefault();

        var client_id = $(this).closest('.client').find('.client_id').text();
        console.log(client_id); 
        $.ajax({
          method: "POST",
          url: "recup_client.php",
          data: {
            'click_edit_btn': true,
            'client_id': client_id,
          },
          success: function (response) {
            console.log(response);
            $.each(response, function (key, value) {
              $('#client_id').val(value['NROCLIE']);
              $('#nom_client').val(value['NOMCLIE']);
              $('#pnom_client').val(value['PRENOMCLIE']);
              $('#ad_client').val(value['ADRESSECLIE']);
              $('#ville_clt').val(value['VILLECLIE']);
              $('#cp_clt').val(value['CODEPOSTALCLIE']);
              $('#Titre_clt').val(value['TITRECLIE']);
              $('#tel').val(value['NROTELCLIE']);

            });
            $('#edit_client_Modal').modal('show');

          }
        });
      });
    });
    // supprimer client 
    $(document).ready(function () {
      $('.confirm_dlt_clie').click(function (e) {
        e.preventDefault();
        var client_id = $(this).closest('.client').find('.client_id').text();

        console.log(client_id);
        $('#delete_client_id').val(client_id)
        $('#delete_client_Modal').modal('show');


        $.ajax({
          method: "POST",
          url: "delete_client.php",
          data: {
            'click_delete_btn': true,
            'client_id': client_id,
          },
          success: function (response) {
            console.log(response);
        // window.location.reload();

          }
        });


      });
    });
  </script>