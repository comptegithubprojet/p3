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
	    <header id="header-backend">

	    	<?php if ($user->isAuthenticated()) { ?>
	    	<div id="menu-admin">
	        	<div>
					<nav>    
					  <ul class="nav nav-pills nav-stacked">

					    <li><a href="/admin/">Liste des News</a></li>
					    <li><a href="/admin/news-insert.html">Ajouter une news</a></li>
					    <li><a href="/admin/comments-list.html">Liste des commentaires</a></li>

					  </ul>
					</nav>
				</div>
			</div>

	    	<div class="barre-admin">
	    		<ul class="list-inline">
	    			<li><a role="btn" class="btn" href="/"><span class="fas fa-home"></span> Accueil du site</a></li>
	    			<li><a role="btn" class="btn" href="/admin/"><span class="fas fa-tachometer-alt"></span> Tableau de bord</a></li>
	    			<li><a role="btn" class="btn" href="/admin/disconnect.html"><span class="fas fa-power-off"></span> Deconnexion</a></li>
	    		</ul>
	    	</div>
	    	<?php } ?>
	    	
	    </header>
    </div>



    
 
    <div id="content-wrap">
      <section id="main">

        <div class="container">
          <?php if ($user->hasFlash()) echo '<div class="alert col-lg-offset-3 col-lg-6 alert-success alert-dismissable">', $user->getFlash(), '<button type="button" class="close" data-dismiss="alert">&times;</button></div>'; ?>
        </div>

		<?= $content ?>	         

      </section>
    </div>

    <footer>
    	
    </footer>

    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="/plugin/tinymce/tinymce.min.js"></script>
    <script type="text/javascript" src="/plugin/tinymce/init-tinymce.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  </body>
</html>

<script type="text/javascript" src="/js/javascript.js"></script>