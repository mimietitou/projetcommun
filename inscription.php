<?php
include('include/header.php');
?>
<div class="container">
  <div class="row">
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
      <h4 class="modal-title">Creer un nouveau compte</h4>
    </div>
    <div id="inscriptiondone"></div>
      <form id="inscription" action="inscription_ajax.php" method="post">
        <div class="modal-body">
          <div class="form-group">
            <label for="pseudo">Votre pseudo* :</label><br>
            <input class="parent" type="text" name="pseudo" value=""><br>
            <span class="help-block" id="error_pseudo"></span>
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
                <label for="password">Votre Password* : </label><br>
                <input class="enfant" type="text" name="password" value=""><br>
                <span class="help-block" id="error_password"></span><br>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="repeatpassword">Repeat password* : </label><br>
                <input class="enfant" type="text" name="repeatpassword" value=""><br>
                <span class="help-block" class="erreur"></span><br>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <input type="hidden" name="isEmpty" value="">
          <button type="submit" name="submit" value="Je m'inscris" class="btn btn-success btn-icon"><i class="fa fa-check"></i> Creer mon compte</button>
        </div>
      </form>
    </div>
  </div>
</div>
  <?php include('include/footer.php');
  ?>
