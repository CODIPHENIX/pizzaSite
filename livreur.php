<?php 
include_once("head.php");
?>
<body>
<?php include('message.php'); ?>
<?php include_once("modal_livreur.php"); ?>

    <!-- header with nav bar -->
    <header class="p-3 bg-secondary sticky-top">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
          <img src="asset/logo pizza-02.png" style="width:9.5rem; height:2.5rem" alt="logo">
        </a>
         <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control" name="search-livreur" placeholder="Search..." aria-label="Search">
        </form>

        <ul class="nav col-12 col-lg-auto ms-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="index.php" class="nav-link px-3 link-light">Pizza</a></li>
          <li><a href="livreur.php" class="nav-link px-3 link-active">Livreur</a></li>
          <li><a href="client.php" class="nav-link px-3 link-light">Client</a></li>
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
    <!-- add livreur section  -->
    <section class="add-pizza py-2 bg-primary">
        <div class="container">
            <div class="d-flex flex-row-reverse ">          
            <a href="#" class="custom-btn a-btn"  data-bs-toggle="modal" data-bs-target="#add_livreur_Modal">Ajouter</a>    
            </div>
        </div>
    </section>
    <!-- main section to livreur pizza  -->
    <section class="bg-secondary">
        <div class="container py-4">
           
            <?php
            include_once("dbconnect.php");
            $tablelivreur=getlivreur();
            while($row=$tablelivreur->fetch_assoc()){
            echo    '<div class="card mb-3 g-5">';
            echo    '<div class="row g-0">';
            echo    '<div class="col-12 col-lg-2 ">';
            echo        '<img src="./asset/img_livreur/'.$row['NROLIVR'].$row['NOMLIVR'].'.jpg" class="custom1-img" alt="...">';
            echo    '</div>';
            echo '<div class="col-12 col-lg-10 p-2 livreur">';
            echo            '<h5 class="card-title livreur_id" hidden>' . $row['NROLIVR'] . '</h5>';
            echo        '<div class="row">';
             
            echo        '<div class="col-12 col-md-7 col-lg-8 align-self-center">';

            echo            '<h6 class="card-title"><strong>Nom: </strong>'.$row['NOMLIVR'].'</h6>';
            echo            '<h6 class="card-title"><strong>Prenom: </strong>'.$row['PRENOMLIVR'].'</h6>';
            echo             "<h6 class='card-text opacity-50'><strong>Date d'embauche: </strong>".$row['DATEEMBAUCHLIVR']."</h6>";
            echo         '</div>';
           
            echo            '<div class="container col-12 col-md-5 col-lg-4 g-3 g-lg-0 mb-2 align-self-center mb-md-0">';          
            echo                '<a href="#" class="custom-btn bg-primary edit_lvr">Modifier</a> ';
            echo                '<a href="#" class="custom-btn bg-secondary confirm_dlt_lvr">Supprimer</a>';    
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
    // modifier et mettre a jour les donné livreur 
    $(document).ready(function () {
      $('.edit_lvr').click(function (e) {
        e.preventDefault();

        var livreur_id = $(this).closest('.livreur').find('.livreur_id').text();
        // console.log(livreur_id); 
        $.ajax({
          method: "POST",
          url: "recup_livreur.php",
          data: {
            'click_edit_btn': true,
            'livreur_id': livreur_id,
          },
          success: function (response) {
            console.log(response);
            $.each(response, function (key, value) {
              $('#livreur_id').val(value['NROLIVR']);
              $('#nom_livreur').val(value['NOMLIVR']);
              $('#pnom_livreur').val(value['PRENOMLIVR']);
              $('#embauche_dt').val(value['DATEEMBAUCHLIVR']);

            });
            $('#edit_livreur_Modal').modal('show');

          }
        });
      });
    });
    // supprimer livreur 
    $(document).ready(function () {
      $('.confirm_dlt_lvr').click(function (e) {
        e.preventDefault();
        var livreur_id = $(this).closest('.livreur').find('.livreur_id').text();

        console.log(livreur_id);
        $('#delete_livreur_id').val(livreur_id)
        $('#delete_livreur_Modal').modal('show');


        $.ajax({
          method: "POST",
          url: "delete_livreur.php",
          data: {
            'click_delete_btn': true,
            'livreur_id': livreur_id,
          },
          success: function (response) {
            console.log(response);
        // window.location.reload();

          }
        });


      });
    });
  </script>