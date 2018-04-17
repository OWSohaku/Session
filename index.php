<?php

require 'inc/head.php';

if (isset($_SESSION['loginname'])) {
    $_SESSION['loginname'];
} else {
    header("Location: login.php");
}

if (isset($_GET['add_to_cart'])) {

    // Pour ajouter un cookie
    switch ($_GET['add_to_cart']) {
        case "46":
            if (isset($_SESSION['nuts'])) {
                $_SESSION['nuts'] += 1;
            } else {
                $_SESSION['nuts'] = 1;
            }
            break;
        case "36":
            if (isset($_SESSION['chips'])) {
                $_SESSION['chips'] += 1;
            } else {
                $_SESSION['chips'] = 1;
            }
            break;
        case "58":
            if (isset($_SESSION['choco'])) {
                $_SESSION['choco'] += 1;
            } else {
                $_SESSION['choco'] = 1;
            }
            break;
        case "32":
            if (isset($_SESSION['m&ms'])) {
                $_SESSION['m&ms'] += 1;
            } else {
                $_SESSION['m&ms'] = 1;
            }
            break;
    }

    // Pour supprimer un cookie
    if (isset($_GET['add_to_cart'])) {
        switch ($_GET['add_to_cart']) {
            case "47":
                if ($_SESSION['nuts'] > 0) {
                    $_SESSION['nuts']--;
                }
                break;
            case "37":
                if ($_SESSION['chips'] > 0) {
                    $_SESSION['chips']--;
                }
                break;
            case "59":
                if ($_SESSION['choco'] > 0) {
                    $_SESSION['choco']--;
                }
                break;
            case "33":
                if ($_SESSION['m&ms'] > 0) {
                    $_SESSION['m&ms']--;
                }
                break;
        }
    }
}





?>

<section class="cookies container-fluid">
  <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-46.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Pecan nuts</h3>
          <p>Cooked by Penny !</p>
            <p> Quantité : <?= $_SESSION['nuts'] ?? '0' ?></p>
            <a href="?add_to_cart=46" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Ajoute <br> 1 cookie
          </a>
            <a href="?add_to_cart=47" class="btn btn-primary">
                <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> Enlève <br> 1 cookie
            </a>
        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-36.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Chocolate chips</h3>
          <p>Cooked by Bernadette !</p>
            <p> Quantité : <?= $_SESSION['chips'] ?? '0' ?></p>
            <a  href="?add_to_cart=36" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Ajoute <br> 1 cookie
          </a>
            <a href="?add_to_cart=37" class="btn btn-primary">
                <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> Enlève <br> 1 cookie
            </a>
        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-58.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Chocolate cookie</h3>
          <p>Cooked by Bernadette !</p>
            <p> Quantité : <?= $_SESSION['choco'] ?? '0' ?></p>
            <a  href="?add_to_cart=58" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Ajoute <br> 1 cookie
          </a>
            <a href="?add_to_cart=59" class="btn btn-primary">
                <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> Enlève <br> 1 cookie
            </a>
        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-32.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>M&M's&copy; cookies</h3>
          <p>Cooked by Penny !</p>
            <p> Quantité : <?= $_SESSION['m&ms'] ?? '0' ?></p>
            <a  href="?add_to_cart=32" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Ajoute <br> 1 cookie
          </a>
            <a href="?add_to_cart=33" class="btn btn-primary">
                <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> Enlève <br> 1 cookie
            </a>
        </figcaption>
      </figure>
    </div>
  </div>
</section>
<?php require 'inc/foot.php'; ?>
