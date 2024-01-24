<!-- add Modal pizza-->
<div class="modal fade" id="add_pizza_Modal" tabindex="-1" aria-labelledby="addpizza" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="addpizza">Ajouter une pizza</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="recup_pizza.php" method="post" enctype="multipart/form-data">
        <div class="modal-body">
          <label for="nompizza">Nom de la pizza*:</label>
          <input type="text" class="form-control" id="nompizza" name="nompizza" required>
          <Label for="prixpizza">Prix de la pizza*</Label>
          <input type="number" class="form-control" id="prixpizza" name="prixpizza" min="0" step="0.01" required>
          <label for="imgpizza">Inserer une image</label>
          <input type="file" class="form-control" id="imgpizza" name="imgpizza" accept=".jpg" required>
        </div>
        <div class="modal-footer">

          <button type="button" class="custom-btn bg-secondary" data-bs-dismiss="modal">Fermer</button>
          <button type="submit" name="submit_pizza" class="custom-btn bg-primary">Sauvegader</button>

        </div>
      </form>
    </div>
  </div>
</div>

<!-- edit Modal pizza -->
<div class="modal fade" id="edit_pizza_Modal" tabindex="-1" aria-labelledby="editpizza" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editpizza">Modifier la pizza</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="recup_pizza.php" method="post" enctype="multipart/form-data">
        <div class="modal-body">
          <input type="hidden" name="pizza_id" id="pizza_id">
          <label for="nompizza">Nom de la pizza*:</label>
          <input type="text" class="form-control" id="nom_pizza" name="nompizza" required>
          <label for="prixpizza">Prix de la pizza*</label>
          <input type="number" class="form-control" id="prix_pizza" name="prixpizza" min="0" step="0.01">
          <label for="imgpizza">Insérer une image</label>
          <input type="file" class="form-control" name="imgpizza" accept=".jpg">
        </div>
        <div class="modal-footer">
          <button type="button" class="custom-btn bg-secondary" data-bs-dismiss="modal">Fermer</button>
          <button type="submit" name="update_pizza" class="custom-btn bg-primary">Sauvegarder</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- DELETE Modal pizza -->
<div class="modal fade" id="delete_pizza_Modal" tabindex="-1" aria-labelledby="deletepizzalabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="deletepizzalabel">supprimer la pizza</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="recup_pizza.php" method="post">
        <div class="modal-body">
          <input type="hidden" name="pizza_id" id="delete_pizza_id">
          <h4>Es-tu certain de vouloir supprimer cette pizza de la base de
            données?</h4>
        </div>
        <div class="modal-footer">
          <button type="button" class="custom-btn bg-secondary" data-bs-dismiss="modal">No</button>
          <button type="submit" name="delete_pizza" class="custom-btn bg-danger"> oui ! supprime</button>
        </div>
      </form>
    </div>
  </div>
</div>