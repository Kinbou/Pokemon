<!-- CREER un article avec foreach -->
<!-- <?php foreach ($articlesList as $currentId => $currentArticle) : ?>
<article class="card">
    <div class="card-body">
        <h2 class="card-title">
            <a href="index.php?page=article&id=<?= $currentId ?>"><?= $currentArticle->title ?></a>
        </h2>
        <p class="card-text"><?= $currentArticle->content ?></p>
        <p class="infos">
          Posté par <a href="index.php?page=author&id=<?= $currentArticle->author ?>" class="card-link"><?= $currentArticle->author()->name ?></a> le <time><?= $currentArticle->getDateFr() ?></time> dans <a href="index.php?page=category&id=<?= $currentArticle->category ?>" class="card-link"><?= $currentArticle->categoryHashTag(); ?></a>
        </p>
    </div>
</article>
<?php endforeach ?> -->

    <!-- Création d'une carte pokemon-->
  <aside class="col-lg-5">  
    <div class="card">
      <h4 class="card-header">Dresseur Jenni</h4>
      <div class="card-body" class="pikachu">
          <p>Nom : Jenni</p>
          <p>Age : 28 ans</p>  
          <p>Région : Alsace</p>
          <p>Pokemon : Pikachu</p>     
      </div>
    </div>
</aside>
        <!-- Je met un element de navigation: https://getbootstrap.com/docs/4.1/components/pagination/ -->
        <nav aria-label="Page navigation example">
          <ul class="pagination justify-content-between">
            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-arrow-left"></i> Précédent</a></li>
            <li class="page-item"><a class="page-link" href="#">Suivant <i class="fa fa-arrow-right"></i></a></li>
          </ul>
        </nav> 