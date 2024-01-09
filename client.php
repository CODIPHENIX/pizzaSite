<?php 
include_once("head.php");
?>
<body>
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
          <li><a href="index.php" class="nav-link px-3 link-light">pizza</a></li>
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
    <!-- add pizza section  -->
    <section class="add-pizza py-2 bg-primary">
        <div class="container">
            <div class="d-flex flex-row-reverse ">          
            <a href="#" class="custom-btn a-btn">Ajouter</a>    
            </div>
        </div>
    </section>
    <!-- main section to display pizza  -->
    <section class="bg-secondary">
        <div class="container py-4">
           
            <?php
            include_once("dbconnect.php");
            $tableclient=getclient();
            while($row=$tableclient->fetch_assoc()){
            echo    '<div class="card mb-3 g-5">';
            echo    '<div class="row g-0">';
            echo    '<div class="col-12 col-lg-2 ">';
            echo        '<img src="./asset/img_livreur/'.$row['NROCLIE'].$row['NOMCLIE'].'.jpg" class="custom2-img" alt="...">';
            echo    '</div>';
            echo '<div class="col-12 col-lg-10 p-2">';
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
            echo                '<a href="#" class="custom-btn bg-primary ">Modifier</a> ';
            echo                '<a href="#" class="custom-btn bg-secondary">Supprimer</a>';    
            echo            '</div>';
           
            echo         '</div>';
            echo    '</div>';
            echo    '</div>';
            echo    '</div>';

           
        }
            ?>
            
        </div>

    </section>

    <footer class="bg-primary py-3 text-white ">
        
        <div class="container justify-content-center">
            <p class="text-center mb-0"><strong>Copyright&copy;</strong> Project Pizza 2024 by <strong>Bwango Astrid</strong></p>
        </div>
    </footer>


</body>
</html>