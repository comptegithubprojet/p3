<!DOCTYPE html>
<html>
  <head>
    <title>
      <?= isset($title) ? $title : 'Le blog de Jean Forteroche' ?>
    </title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
  </head>
 
  <body>

    <div class="container-fluid">
      <?php if ($user->isAuthenticated()) { ?>
        <div class="barre-admin">
          <ul class="list-inline">
            <li><a role="btn" class="btn" href="/"><span class="fas fa-home"></span> Accueil du site</a></li>
            <li><a role="btn" class="btn" href="/admin/"><span class="fas fa-tachometer-alt"></span> Tableau de bord</a></li>
            <li><a role="btn" class="btn" href="/admin/disconnect.html"><span class="fas fa-power-off"></span> Deconnexion</a></li>
          </ul>
        </div>
        <?php } ?>
    </div>

    <div class="container-fluid" id="wrap">
      <header id="header-fronted">

        <h1 id="header-titre" <?php if ($user->isAuthenticated()) { echo 'style="margin-top:60px;"'; } ?>>Jean Forteroche</a></h1>

      </header>
    </div>  

    <div class="container-fluid">

      <nav class="navbar">

        <div class="navbar-header">   
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="glyphicon glyphicon-menu-hamburger"></span>
          </button>
        </div>

        <div class="collapse navbar-collapse">

          <ul class="nav navbar-nav">

            <li><a href="/">Accueil</a></li>

            <li class="dropdown">
              <a data-toggle="dropdown" href="#">Mes Voyages <span id="chevron-menu" class="glyphicon glyphicon-chevron-down"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Everest</a></li>
                <li><a href="#">Canada</a></li>
                <li><a href="#">Patagonie</a></li>
                <li><a href="#">Mont-Blanc</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a data-toggle="dropdown" href="#">Conseils aux voyageurs <span id="chevron-menu" class="glyphicon glyphicon-chevron-down"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Bien préparer son voyages</a></li>
                <li><a href="#">Equipements utiles</a></li>
                <li><a href="#">Comment choisir la bonne destination</a></li>
                <li><a href="#">Billets d'avion pas chers</a></li>
              </ul>
            </li>

            <li><a href="#">Qui suis-je ?</a></li>

            <li><a href="#">Contact</a></li>        

            <?php if ($user->isAuthenticated()) { ?>
            <li><a href="/admin/">Liste des News</a></li>
            <li><a href="/admin/news-insert.html">Ajouter une news</a></li>
            <li><a href="/admin/comments-list.html">Liste des commentaires</a></li>
            <li><a href="/admin/disconnect.html">Deconnexion</a></li>
            <?php } ?>
          </ul>

          <div class="clearfix visible-md-block visible-lg-block">
            <ul class="nav navbar-nav navbar-right">
              <li><a class="btn btn-social-icon btn-twitter"><span id="btn-social-menu" class="fab fa-twitter"></span></a></li>
              <li><a class="btn btn-social-icon btn-facebook"><span id="btn-social-menu" class="fab fa-facebook"></span></a></li>
              <li><a class="btn btn-social-icon btn-instagram"><span id="btn-social-menu" class="fab fa-instagram"></span></a></li>
              <li><a class="btn btn-social-icon btn-youtube"><span id="btn-social-menu" class="fab fa-youtube"></span></a></li>
            </ul>
          </div>

        </div>

      </nav>
    </div>

 
    <div id="content-wrap">
      <section id="main">

        <?= $content ?>

      </section>
    </div>



    <div class="container-fluid">

      <footer id="footer" class="clearfix">
        <div class="row">
          <div class="col-xs-12">

            <img id="img-footer" src="/images/footer.jpg" class="img-responsive">

            <div class="all-socials">
              
              <h3>Mes reseaux</h3>

              <div id="carouselFooter" class="carousel slide" data-ride="carousel" >

                <a id="carousel-arrow-footer" class="left carousel-control" href="#carouselFooter" data-slide="prev">
                  <span id="icon-arrow-carousel" class="glyphicon glyphicon-chevron-left"></span>
                </a>

                <div class="carousel-inner">
                  <div class="item active">
                    <a class="btn"><img src="/images/twitter.png" alt="First slide"></a>
                    <a class="btn btn-social-icon btn-twitter" id="btn-social-footer"><span class="fab fa-twitter"></span> Twitter</a>
                  </div>
                  <div class="item">
                    <a class="btn"><img src="/images/facebook.png" alt="Second slide"></a>
                    <a class="btn btn-social-icon btn-facebook" id="btn-social-footer"><span class="fab fa-facebook"></span> Facebook</a>
                  </div>
                  <div class="item">
                    <a class="btn"><img src="/images/instagram.png" alt="Third slide"></a>
                    <a class="btn btn-social-icon btn-instagram" id="btn-social-footer"><span class="fab fa-instagram"></span> Instagram</a>
                  </div>
                  <div class="item">
                    <a class="btn"><img src="/images/youtube.png" alt="Fourth slide"></a>
                    <a class="btn btn-social-icon btn-youtube" id="btn-social-footer"><span class="fab fa-youtube"></span> Youtube</a>
                  </div>
                </div>  

                <a id="carousel-arrow-footer" class="right carousel-control" href="#carouselFooter" data-slide="next">
                  <span id="icon-arrow-carousel" class="glyphicon glyphicon-chevron-right"></span>
                </a>              

              </div>

            </div>

            <div class="copyright">
              <p> © COPYRIGHT 2018 - JEAN FORTEROCHE - TOUS DROITS RÉSERVÉS</p>
            </div>

          </div>
        </div>
      </footer>

    </div>

    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="/plugin/tinymce/tinymce.min.js"></script>
    <script type="text/javascript" src="/plugin/tinymce/init-tinymce.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  </body>
</html>

<script type="text/javascript" src="/js/javascript.js"></script>