<?php include("include/header.php");?>

<!-- FORMULAIRE d'inscription avec vérification des erreurs-->
<div class="container">
  <div class="row">
    <div class="modal-content-contact">
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
      <h4 class="modal-title">Envoyer votre message</h4>
    </div>
      <form id="contact" action="" method="post">
        <div class="modal-body">
          <div class="form-group">
            <label for="nom">Votre nom* : </label><br>
            <input class="parent" type="text" name="nom" value=""><br>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="email">Votre Email* : </label><br>
                <input class="enfant" type="email" name="email" value=""><br>
                <span class="help-block" id="error_email"></span><br>
              </div>
            </div>
          </div>  
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="message">Votre message : </label><br>
                <textarea class="enfant" type="text" name="message" rows="8" cols="60" value=""></textarea>
                <span class="help-block" id="error_password"></span><br>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <input type="hidden" name="isEmpty" value="">
          <button type="submit" name="submit" value="Soumettre" class="btn btn-success btn-icon"><i class="fa fa-check"></i>Soumettre</button>
        </div>
      </form>
    </div>
  </div>
</div>
