<?php echo 'salut';
include("include/header.php");?>

<!-- FORMULAIRE d'inscription avec vérification des erreurs-->
<div class="container">
  <div class="row">
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
      <h4 class="modal-title">Envoyer un message</h4>
    </div>
    <div id="inscriptiondone"></div>
      <form id="inscription" action="inscription_ajax.php" method="post">
        <div class="modal-body">
          <div class="form-group">
            <label class="form-control" for="pseudo">Pseudo*</label><br><br>
            <input type="text" name="pseudo" value=""><br>
            <span class="help-block" id="error_pseudo"></span><br>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="email">Email*</label><br><br>
                <input type="email" name="email" value=""><br>
                <span class="help-block" id="error_email"></span><br>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <textarea type="text" name="message" value=""></textarea><br>
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
