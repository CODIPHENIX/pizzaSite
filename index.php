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
         <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" method="post" role="search">
          <input type="search" class="form-control" name="search-pizza" placeholder="Search..." aria-label="Search">
        </form>

        <ul class="nav col-12 col-lg-auto ms-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="index.php" class="nav-link px-3 link-active">pizza</a></li>
          <li><a href="livreur.php" class="nav-link px-3 link-light">Livreur</a></li>
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
    <!-- add pizza section  -->
    <section class="add-pizza py-2 bg-primary ">
        <div class="container">
            <div class="d-flex flex-row-reverse ">          
            <a href="#" class="custom-btn a-btn">Ajouter</a>    
            </div>
        </div>
    </section>
    <!-- main section to display pizza  -->
    <section class="bg-secondary">
        <div class="container py-4">
            <div class="row row-cols-sm-2 row-cols-lg-3  row-cols-xxl-4  g-5">
            <?php
            include_once("dbconnect.php");
            $tablepizza=getpizza();
            while($row=$tablepizza->fetch_assoc()){
                echo '<div class="col" >';
            echo '<div class="card ">';
            echo  '<img src="./asset/img_pizza/'.$row['NROPIZZ'].'.jpg" class="custom-img" alt="...">';
            echo   '<div class="card-body">';
            echo   '<h5 class="card-title">'.$row['DESIGNPIZZ'].'</h4>';
            echo   '<h6 class="card-text text-primary">£'.$row['TARIFPIZZ'].'</h5>';
            echo'<div class="container d-flex justify-content-evenly  g-1">';
            echo    '<a href="#" class="custom-btn bg-primary ">Modifier</a> ';
            echo    '<a href="#" class="custom-btn bg-secondary">Supprimer</a>'; 
            echo'</div>';
            echo    '</div>';
            echo '</div>';
            echo '</div>';
           
        }
            ?>
             </div>
        </div>

    </section>

    <footer class="bg-primary py-3 text-white ">
        
        <div class="container justify-content-center">
            <p class="text-center mb-0"><strong>Copyright&copy;</strong> Project Pizza 2024 by <strong>Bwango Astrid</strong></p>
        </div>
    </footer>


</body>
</html>