<!-- add Modal client-->
<div class="modal fade" id="add_client_Modal" tabindex="-1" aria-labelledby="addclient" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="addclient">Ajouter un client</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="recup_client.php" method="post" enctype="multipart/form-data">
        <div class="modal-body">
          <label for="nomclient">Nom:</label>
          <input type="text" class="form-control" id="nomclient" name="nomclient" required>
          <Label for="pnomclient">Prenom:</Label>
          <input type="text" class="form-control" id="pnomclient" name="pnomclient" required>
          <Label for="adclient">Adresse:</Label>
          <input type="text" class="form-control" id="adclient" name="adclient" required>
          <Label for="villeclt">Ville:</Label>
          <input type="text" class="form-control" id="villeclt" name="villeclt" required>
          <Label for="cpclt">Code Postale:</Label>
          <input type="text" class="form-control" id="cpclt" name="cpclt" required>
          <Label for="Titreclt">Titre:</Label>
          <select id="Titreclt" name="Titreclt" class="form-control" required>
            <option value="M" class="form-control">M</option>
            <option value="Mlle" class="form-control">Mlle</option>
            <option value="Mme" class="form-control">Mme</option>
          </select>
          <label for="phone">Numéro de téléphone:</label>
          <input type="tel" class="form-control" id="phone" name="phone" pattern="phone" pattern="^0[1-9]([ .-]?[0-9]{2}){4}$" placeholder="Format: 1234567890" >
          <Label for="imgclient">Inserez une photo</Label>
          <input type="file" class="form-control" id="imgclient" name="imgclient" accept=".jpg" required>
        </div>
        <div class="modal-footer">

          <button type="reset" class="custom-btn bg-secondary" data-bs-dismiss="modal">Fermer</button>
          <button type="submit" name="submit_client" class="custom-btn bg-primary">Sauvegader</button>

        </div>
      </form>
    </div>
  </div>
</div>

<!-- edit Modal client -->
<div class="modal fade" id="edit_client_Modal" tabindex="-1" aria-labelledby="editclient" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editclient">Modifier la client</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="recup_client.php" method="post" enctype="multipart/form-data">
        <div class="modal-body">
        <input type="hidden" name="client_id" id="client_id">
        <label for="nom_client">Nom:</label>
          <input type="text" class="form-control" id="nom_client" name="nomclient" required>
          <Label for="pnom_client">Prenom:</Label>
          <input type="text" class="form-control" id="pnom_client" name="pnomclient" required>
          <Label for="ad_client">Adresse:</Label>
          <input type="text" class="form-control" id="ad_client" name="adclient" required>
          <Label for="ville_clt">Ville:</Label>
          <input type="text" class="form-control" id="ville_clt" name="villeclt" required>
          <Label for="cp_clt">Code Postale:</Label>
          <input type="text" class="form-control" id="cp_clt" name="cpclt" required>
          <Label for="Titre_clt">Titre:</Label>
          <select id="Titre_clt" name="Titre_clt" class="form-control" required>
            <option value="M" class="form-control">M</option>
            <option value="Mlle" class="form-control">Mlle</option>
            <option value="Mme" class="form-control">Mme</option>
          </select>
          <label for="tel">Numéro de téléphone:</label>
          <input type="tel" class="form-control" id="tel" name="tel" pattern="phone" pattern="^0[1-9]([ .-]?[0-9]{2}){4}$" placeholder="Format: 1234567890" >
          <Label for="imgclient">Inserez une photo</Label>
          <input type="file" class="form-control" id="imgclient" name="imgclient" accept=".jpg">
        </div>
        <div class="modal-footer">
          <button type="reset" class="custom-btn bg-secondary" data-bs-dismiss="modal">Fermer</button>
          <button type="submit" name="update_client" class="custom-btn bg-primary">Sauvegarder</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- DELETE Modal client -->
<div class="modal fade" id="delete_client_Modal" tabindex="-1" aria-labelledby="deleteclientlabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="deleteclientlabel">supprition client</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="delete_client.php" method="post">
        <div class="modal-body">
          <input type="hidden" name="client_id" id="delete_client_id">
          <h5>Es-tu certain de vouloir supprimer ce client de la base de
            données?</h5>
        </div>
        <div class="modal-footer">
          <button type="button" class="custom-btn bg-secondary" data-bs-dismiss="modal">Non</button>
          <button type="submit" name="delete_client" class="custom-btn bg-danger"> Oui ! supprime</button>
        </div>
      </form>
    </div>
  </div>
</div>

