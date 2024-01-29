<!-- add Modal livreur-->
<div class="modal fade" id="add_livreur_Modal" tabindex="-1" aria-labelledby="addlivreur" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="addlivreur">Ajouter une livreur</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="recup_livreur.php" method="post" enctype="multipart/form-data">
        <div class="modal-body">
          <label for="nomlivreur">Nom::</label>
          <input type="text" class="form-control" id="nomlivreur" name="nomlivreur" required>
          <Label for="pnomlivreur">Prenom:</Label>
          <input type="text" class="form-control" id="pnomlivreur" name="pnomlivreur" required>
          <Label for="embauche_d">Date d'embauche:</Label>
          <input type="date" class="form-control" id="embauche_d" name="embauche_d" required>
          <label for="imglivreur">Inserer une image</label>
          <input type="file" class="form-control" id="imglivreur" name="imglivreur" accept=".jpg" required>
        </div>
        <div class="modal-footer">

          <button type="reset" class="custom-btn bg-secondary" data-bs-dismiss="modal">Fermer</button>
          <button type="submit" name="submit_livreur" class="custom-btn bg-primary">Sauvegader</button>

        </div>
      </form>
    </div>
  </div>
</div>

<!-- edit Modal livreur -->
<div class="modal fade" id="edit_livreur_Modal" tabindex="-1" aria-labelledby="editlivreur" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editlivreur">Modifier la livreur</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="recup_livreur.php" method="post" enctype="multipart/form-data">
        <div class="modal-body">
          <input type="hidden" name="livreur_id" id="livreur_id">
          <label for="nom_livreur">Nom::</label>
          <input type="text" class="form-control" id="nom_livreur" name="nomlivreur" required>
          <Label for="pnom_livreur">Prenom:</Label>
          <input type="text" class="form-control" id="pnom_livreur" name="pnomlivreur" required>
          <Label for="embauche_dt">Date d'embauche:</Label>
          <input type="date" class="form-control" id="embauche_dt" name="embauche_d">
          <label for="imglivreur">Insérer une image</label>
          <input type="file" class="form-control" name="imglivreur" accept=".jpg">
        </div>
        <div class="modal-footer">
          <button type="reset" class="custom-btn bg-secondary" data-bs-dismiss="modal">Fermer</button>
          <button type="submit" name="update_livreur" class="custom-btn bg-primary">Sauvegarder</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- DELETE Modal livreur -->
<div class="modal fade" id="delete_livreur_Modal" tabindex="-1" aria-labelledby="deletelivreurlabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="deletelivreurlabel">supprimer la livreur</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="delete_livreur.php" method="post">
        <div class="modal-body">
          <input type="hidden" name="livreur_id" id="delete_livreur_id">
          <h5>Es-tu certain de vouloir supprimer cette livreur de la base de
            données?</h5>
        </div>
        <div class="modal-footer">
          <button type="button" class="custom-btn bg-secondary" data-bs-dismiss="modal">Non</button>
          <button type="submit" name="delete_livreur" class="custom-btn bg-danger"> Oui ! supprime</button>
        </div>
      </form>
    </div>
  </div>
</div>