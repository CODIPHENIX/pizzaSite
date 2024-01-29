<?php
include_once("head.php");
?>

<body>
  <?php include('message.php'); ?>
  <!-- header with nav bar -->
  <?php include_once("modal_pizza.php"); ?>
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
          <li><a href="index.php" class="nav-link px-3 link-active">Pizza</a></li>
          <li><a href="livreur.php" class="nav-link px-3 link-light">Livreur</a></li>
          <li><a href="client.php" class="nav-link px-3 link-light">Client</a></li>
          <li><a href="#" class="nav-link px-3 link-light">Commande</a></li>
        </ul>
        <!-- dropdown menu  -->
        <div class="dropdown text-end">
          <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown"
            aria-expanded="false">
            <img src="asset/user.png" alt="mdo" width="30" height="30" class="">
          </a>
          <ul class="dropdown-menu text-small">

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
        <a href="#" class="custom-btn a-btn" data-bs-toggle="modal" data-bs-target="#add_pizza_Modal">Ajouter</a>
      </div>
    </div>


    </div>
  </section>

  <!-- main section to display pizza  -->
  <section class="bg-secondary">
    <div class="container py-4">
      <div class="row row-cols-sm-2 row-cols-lg-3  row-cols-xxl-4  g-5">
        <?php
        include_once("dbconnect.php");
        $tablepizza = getpizza();
        while ($row = $tablepizza->fetch_assoc()) {
          echo '<div class="col" >';
          echo '<div class="card ">';
          echo '<img src="./asset/img_pizza/' . $row['NROPIZZ'] . '.jpg" class="custom-img" alt="...">';
          echo '<div class="card-body pizza">';
          echo '<h5 class="card-title pizza_id" hidden>' . $row['NROPIZZ'] . '</h5>';
          echo '<h5 class="card-title">' . $row['DESIGNPIZZ'] . '</h5>';
          echo '<h6 class="card-text text-primary">£' . $row['TARIFPIZZ'] . '</h6>';
          echo '<div class="container d-flex justify-content-evenly  g-1">';
          echo '<a href="#" class="custom-btn bg-primary edit_data">Modifier</a> ';
          echo '<a href="#" class="custom-btn bg-secondary confirm_delete_pizza" >Supprimer</a>';
          echo '</div>';
          echo '</div>';
          echo '</div>';
          echo '</div>';

        }
        ?>
      </div>
    </div>

  </section>

  <?php include_once("footer.php"); ?>

  <script>
    // modifier et mettre a jour les donné pizza 
    $(document).ready(function () {
      $('.edit_data').click(function (e) {
        e.preventDefault();

        var pizza_id = $(this).closest('.pizza').find('.pizza_id').text();
        // console.log(pizza_id); 
        $.ajax({
          method: "POST",
          url: "recup_pizza.php",
          data: {
            'click_edit_btn': true,
            'pizza_id': pizza_id,
          },
          success: function (response) {
            console.log(response);
            $.each(response, function (key, value) {
              $('#pizza_id').val(value['NROPIZZ']);
              $('#nom_pizza').val(value['DESIGNPIZZ']);
              $('#prix_pizza').val(value['TARIFPIZZ']);

            });
            $('#edit_pizza_Modal').modal('show');

          }
        });
      });
    });
    // supprimer pizza 
    $(document).ready(function () {
      $('.confirm_delete_pizza').click(function (e) {
        e.preventDefault();
        var pizza_id = $(this).closest('.pizza').find('.pizza_id').text();

        console.log(pizza_id);
        $('#delete_pizza_id').val(pizza_id)
        $('#delete_pizza_Modal').modal('show');


        $.ajax({
          method: "POST",
          url: "delete_pizza.php",
          data: {
            'click_delete_btn': true,
            'pizza_id': pizza_id,
          },
          success: function (response) {
            console.log(response);
        // window.location.reload();

          }
        });


      });
    });
  </script>