
      </main>

<aside class="col-lg-3">
  <!-- Champ de recherche: https://getbootstrap.com/docs/4.1/components/input-group/ -->
  <div class="input-group mb-3">
    <input type="text" class="form-control" placeholder="Rechercher un dresseur"
      aria-label="Rechercher un article..." aria-describedby="basic-addon2">
    <div class="input-group-append">
      <button class="btn btn-outline-secondary" type="button">Allez</button>
    </div>
  </div>

  <!-- TESTS-->

  
          <div class="card">
              <h4 class="card-header">Ajout d'un dresseur</h4>
              <div class="card-body">
                  <form action="" method="post">
                      <div class="form-group">
                          <label for="name">Nom</label>
                          <input type="text" class="form-control" name="name" id="name" placeholder="">
                      </div>
                      <div class="form-group">
                          <label for="age">Age</label>
                          <input type="text" class="form-control" name="age" id="editor" placeholder="">
                      </div>
                      <div class="form-group">
                          <label for="release_date">Région</label>
                          <input type="text" class="form-control" name="release_date" id="release_date" placeholder="">
                      </div>
                      <div class="form-group">
                          <label for="platform">Pokemon</label>
                          <input type="text" class="form-control" name="release_date" id="release_date" placeholder="">
                             
                      </div>
                      <button type="submit" class="btn btn-success btn-block">Ajouter</button>
                  </form>
              </div>
          </div>
      



  <!-- Auteurs: https://getbootstrap.com/docs/4.1/components/card/#list-groups -->
  <div class="card">
    <h3 class="card-header">Dresseurs</h3>
    <ul class="list-group list-group-flush">
    <?php foreach ($dresseurs as $dresseur) : ?>
      <li class="list-group-item">
        <a class="nav-link" href=""><?= $dresseur->name; ?></a>
      </li>
    <?php endforeach; ?>
    </ul>
  </div>

</aside>
</div><!-- /.row -->


<footer>

<!-- Je crée une nouvelle ligne dans ma grille virtuelle: https://getbootstrap.com/docs/4.1/layout/grid/
          Je déclare également que ces elements doivent être centré (flex): https://getbootstrap.com/docs/4.1/utilities/flex/#justify-content
          ainsi que leur textes: https://getbootstrap.com/docs/4.1/utilities/text/#text-alignment -->
<div class="row justify-content-center text-center">
  <div class="col-6 social-networks">
    <!-- Je créé une liste: https://getbootstrap.com/docs/4.1/components/list-group/ -->
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#"><i class="fa fa-twitter-square"></i></a></li>
      <li class="list-inline-item"><a href="#"><i class="fa fa-facebook-square"></i></a></li>
      <li class="list-inline-item"><a href="#"><i class="fa fa-github-square"></i></a></li>
    </ul>
  </div>
</div>

<!-- Je crée une nouvelle ligne dans ma grille virtuelle: https://getbootstrap.com/docs/4.1/layout/grid/
          Je déclare également que ces elements doivent être centré (flex): https://getbootstrap.com/docs/4.1/utilities/flex/#justify-content
          ainsi que leur textes: https://getbootstrap.com/docs/4.1/utilities/text/#text-alignment -->
<div class="row justify-content-center text-center">
  <div class="col-9 links">
    <!-- Je créé une liste: https://getbootstrap.com/docs/4.1/components/list-group/ -->
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Nous contacter</a></li>
      <li class="list-inline-item"><a href="#">Qui sommes nous ?</a></li>
      <li class="list-inline-item"><a href="#">Mentions légales</a></li>
    </ul>
  </div>
</div>
</footer>
</div> <!-- /.container -->
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous">
</script>
</body>

</html>
