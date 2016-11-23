<?php


include('include/header.php');
<<<<<<< HEAD
?>
// FORMULAIRE de connexion
=======
>>>>>>> michele
?>
<!-- // FORMULAIRE de connexion -->

<div class="container">
  <div class="row">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
        <h4 class="modal-title">Connexion à votre compte</h4>
      </div>
      <form id="connexion" action="connexion_ajax.php" method="post" role="form" style="display: block;" >
        <div class="modal-body">
          <div class="form-group">
            <label for="pseudo">Votre Pseudo ou Email : </label><br>
            <input class="parent" type="text" name="pseudo" value=""><br>
            <span class="help-block" id="error_pseudo"></span>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="password">Votre Password* : </label><br>
                <input class="enfant" type="text" name="password" value=""><br>
                <span id="error_password"></span><br>
                <a href="forget.php">Mot de passe oublié</a><br><br>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <div class="text-center">
            <input type="hidden" name="isEmpty" value="">
            <button type="submit" name="submit" value="Connexion" class="btn btn-success btn-icon"><i class="fa fa-check"></i> Connexion</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<?php include('include/footer.php');
 ?>
