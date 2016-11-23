<?php
include('include/header.php');
 ?>

<section class="container-fluid">
  <section class="row">
    <article class="container index-title">
      <h1 class="text-center">Bienvenue Dans la page d'acceuil </h1>
    </article>
    <article class="container ">
      <h1 class="text-center">On est pas tous fait pareil</h1>
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="http://cdn2-europe1.new2.ladmedia.fr/var/europe1/storage/images/le-lab/le-petit-travail-de-pedagogie-dherve-morin-sur-le-projet-de-loi-renseignement-et-ses-arguments-inattendus-24366/510142-1-fre-FR/Le-petit-travail-de-pedagogie-d-Herve-Morin-sur-le-projet-de-loi-renseignement-et-ses-arguments-inattendus.jpg" alt="Vévé">
            <div class="carousel-caption">
              Le futur président du monde
            </div>
          </div>
          <div class="item">
            <img src="http://www.gannett-cdn.com/-mm-/9065941e142eb769bb76794c742e08d1e14ee558/r=300/http/www.gannett-cdn.com/-mm-/9065941e142eb769bb76794c742e08d1e14ee558/r=300/http/www.gannett-cdn.com/-mm-/fa6b5bd20ee387f5c0e2b7f460dd0c3e0f76d982/c=188-0-2563-2375/local/-/media/2016/04/14/USATODAY/USATODAY/635962443213358215-AP-Russia-Putin.jpg" alt="La vérité sur DSK">
            <div class="carousel-caption">
              Il  nous dévoile tout
            </div>
          </div>
          <div class="item">
            <img src="http://www.atlantico.fr/sites/atlantico.fr/files/styles/une/public/images/2014/04/dsk_3.jpg" alt="La vérité sur DSK réponse">
            <div class="carousel-caption">
              DSK s'offusque des dires de Putin
            </div>
          </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

    </article>
  </section>
</section>









 <?php
 include('include/footer.php');
  ?>
