<div class="container-fluid">

  <div id="admin-block-table" class="admin-block clearfix">

    <div class="container">
      <?php if ($user->hasFlash()) echo '<div class="alert col-lg-offset-3 col-lg-6 alert-success alert-dismissable">', $user->getFlash(), '<button type="button" class="close" data-dismiss="alert">&times;</button></div>'; ?>
    </div>
        
    <h2 id="title-admin">Liste des commentaires</h2>

    <table id="text-admin" class="table table-bordered table-striped table-condensed">

      <tr>
      	<th>Auteur</th>
      	<th>Contenu</th>
      	<th>Article</th>
      	<th>Date</th>
      	<th>Nombre de signalement</th>
      	<th>Action</th>
      </tr>

    <?php
    foreach ($listComments as $comment)
    {
      echo 
      '<tr><td>', $comment['auteur'], 
      '</td><td>', $comment['contenu'];
      foreach($listNews as $news)
      {
      	if($comment['news'] == $news['id'])
      	{
      		echo '</td><td>', $news['titre'];
      	} 
      }
       echo
      '</td><td> ', $comment['date']->format('d/m/Y - H\hi'), 
      '</td><td>', $comment['numberSignal'], 
      '</td><td align="center">
      
        <a id="btn-table" role="button" id="btn_modal_comment" class="btn btn-warning" href="comment-update-', $comment['id'], '.html"><span class="glyphicon glyphicon-edit"></span></a> 

        <button id="btn-table" class="btn btn-danger" data-toggle="modal" href="#delete', $comment['id'], '"><span class="glyphicon glyphicon-trash"></span></button>
            <div class="modal fade" id="delete', $comment['id'], '">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 id="text-admin" class="modal-title">Etes vous sur de vouloir supprimer le commentaire  de ', $comment['auteur'], ' ?</h4>
                  </div>
                  <div id="text-admin" class="modal-body">
                    ', $comment['contenu'], '
                  </div>
                  <div class="modal-footer">
                    <a id="text-admin" role="button" class="btn btn-danger" href="comment-delete-', $comment['id'], '.html">Supprimer</a>
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