<?php


include('include/header.php');
?>
// FORMULAIRE de connexion
?>
<div class="container">
  <div class="row">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
        <h4 class="modal-title">Connexion à votre compte</h4>
      </div>
      <form id="connexion" action="connexion_ajax.php" method="post" role="form" style="display: block;" >
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-control" for="pseudo">Pseudo ou Email</label><br><br>
                <input type="text" name="pseudo" tabindex="1" class="form-control" value=""><br><br><br>
                <span class="help-block" id="error_pseudo"></span>
              </div>
            </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="password">Password*</label><br><br>
                <input type="text" name="password" value=""><br><br>
                <span id="error_password"></span><br>
                <a href="forget.php">Mot de passe oublié</a><br><br>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <div class="text-center">
            <input type="hidden" name="isEmpty" value="">
            <input type="submit" name="submit" tabindex="4" class="form-control btn btn-login" value="Connexion">
          </div>
        </div>
        </div>
      </form>
    </div>
  </div>
</div>
<?php include('include/footer.php');
 ?>
