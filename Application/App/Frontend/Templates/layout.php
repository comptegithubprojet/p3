<!DOCTYPE html>
<html>
  <head>
    <title>
      <?= isset($title) ? $title : 'Le blog de Jean Forteroche' ?>
    </title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
  </head>
 
  <body>

    <div class="container" id="wrap">

      <header class="row">
        <div class="col-sm-offset-4 col-sm-4">
          <h1>Jean Forteroche</a></h1>
        </div>
      </header>
    </div>  

    <div class="container-fluid">

      <nav class="navbar navbar-inverse">

        <div class="navbar-header">   
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
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
              <li><a class="btn btn-social-icon btn-twitter"><span class="fa fa-twitter"></span></a></li>
              <li><a class="btn btn-social-icon btn-facebook"><span class="fa fa-facebook"></span></a></li>
              <li><a class="btn btn-social-icon btn-instagram"><span class="fa fa-instagram"></span></a></li>
              <li class="pull-right"><a class="btn btn-social-icon btn-youtube"><span class="fa fa-youtube"></span></a></li>
            </ul>
          </div>

        </div>

      </nav>
    </div>

    <div class="container">
 
      <div id="content-wrap">
        <section id="main">
          
          <?php if ($user->hasFlash()) echo '<div class="alert col-lg-offset-3 col-lg-6 alert-success alert-dismissable">', $user->getFlash(), '<button type="button" class="close" data-dismiss="alert">&times;</button></div>'; ?>
 
          <?= $content ?>
        </section>
      </div>

    </div>

    <div class="container-fluid">

      <footer>
        
      </footer>

    </div>

    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="/plugin/tinymce/tinymce.min.js"></script>
    <script type="text/javascript" src="/plugin/tinymce/init-tinymce.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  </body>
</html>

<script type="text/javascript" src="/js/javascript.js"></script>