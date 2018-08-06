<div  class="container-fluid">

	<div id="admin-block-table" class="admin-block clearfix">

		<div class="container">
          <?php if ($user->hasFlash()) echo '<div class="alert col-lg-offset-3 col-lg-6 alert-success alert-dismissable">', $user->getFlash(), '<button type="button" class="close" data-dismiss="alert">&times;</button></div>'; ?>
        </div>

		<h2 id="title-admin">Liste des news</h2>

		<table id="text-admin" class="table table-bordered table-striped table-condensed">
		  <tr><th>Auteur</th><th>Titre</th><th>Date d'ajout</th><th>Dernière modification</th><th>Action</th></tr>
		<?php
		foreach ($listeNews as $news)
		{
		  echo 
			'<tr><td>', $news['auteur'],
			'</td><td>', $news['titre'],
			'</td><td> ', $news['dateAjout']->format('d/m/Y - H\hi'),
			'</td><td>', ($news['dateAjout'] == $news['dateModif'] ? '-' : 'le '.$news['dateModif']->format('d/m/Y à H\hi')),
			'</td><td  align="center">

				<a id="btn-table" role="button" id="btn_modal_comment" class="btn btn-warning" href="news-update-', $news['id'], '.html"><span class="glyphicon glyphicon-edit"></span></a> 

				<button id="btn-table" class="btn btn-danger" data-toggle="modal" href="#delete', $news['id'], '"><span class="glyphicon glyphicon-trash"></span></button>
			        <div class="modal fade" id="delete', $news['id'], '">
			          <div class="modal-dialog">
			            <div class="modal-content">
			              <div class="modal-header">
			                <h4 id="text-admin" class="modal-title">Etes vous sur de vouloir supprimer la news  ', $news['titre'], ' ?</h4>
			              </div>
			              <div class="modal-footer">
			                <a id="text-admin" role="button" class="btn btn-danger" href="news-delete-', $news['id'], '.html">Supprimer</a>
			                <button id="text-admin" class="btn btn-default" data-dismiss="modal">Annuler</button>
			              </div>
			            </div>
			          </div>
			        </div>

			</td></tr>', "\n";
		}
		?>
		</table>

	</div>

</div>