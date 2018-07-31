<!DOCTYPE html>
<html>
  <head>
    <title>
      <?= isset($title) ? $title : 'Le blog de Jean Forteroche' ?>
    </title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/Envision.css" type="text/css"/>
    <link rel="stylesheet" href="/css/style.css" type="text/css"/>
  </head>
 
  <body>

    <div class="container" id="wrap">

      <header class="row">
        <div class="col-sm-offset-4 col-sm-4">
          <h1>Jean Forteroche</a></h1>
        </div>
      </header>

      <nav class="navbar navbar-inverse" role="navigation">   
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
            <?php if ($user->isAuthenticated()) { ?>
            <li><a href="/admin/">Liste des News</a></li>
            <li><a href="/admin/news-insert.html">Ajouter une news</a></li>
            <li><a href="/admin/comments-list.html">Liste des commentaires</a></li>
            <li><a href="/admin/disconnect.html">Deconnexion</a></li>
            <?php } ?>
          </ul>
        </div>
      </nav>
 
      <div id="content-wrap">
        <section id="main">
          
          <?php if ($user->hasFlash()) echo '<div class="alert col-lg-offset-3 col-lg-6 alert-success alert-dismissable">', $user->getFlash(), '<button type="button" class="close" data-dismiss="alert">&times;</button></div>'; ?>
 
          <?= $content ?>
        </section>
      </div>
 
      <footer>
        
      </footer>

    </div>

    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="/plugin/tinymce/tinymce.min.js"></script>
    <script type="text/javascript" src="/plugin/tinymce/init-tinymce.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  </body>
</html>



