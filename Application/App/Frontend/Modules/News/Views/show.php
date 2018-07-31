<div class="row">
  <div class="col-lg-12">
    <h2><?= $news['titre'] ?></h2>
    <p><?= nl2br($news['contenu']) ?></p>
    <div class="row">
      <p class="pull-right">Auteur :  <em><?= $news['auteur'] ?></em>, le <?= $news['dateAjout']->format('d/m/Y à H\hi') ?></p>
    </div> 
    <?php if ($news['dateAjout'] != $news['dateModif']) { ?>
      <p class="pull-right"><small><em>Modifiée le <?= $news['dateModif']->format('d/m/Y à H\hi') ?></em></small></p>
    <?php } ?> 
  </div>
</div>


<div class="row">      
  <div class="col-lg-12">

    <div class="comment-header">
      <h2>Commentaires</h2>
    </div>

    <div class="button-comment-add">
      <p><a role="button" class="btn btn-primary" href="commenter-<?= $news['id'] ?>.html">Ajouter un commentaire</a></p>
    </div>

    <div class="comments-list">
  
      <?php
      foreach ($comments as $comment)
      {
      ?>

      <div class="media">
        <p><strong><?= htmlspecialchars($comment['auteur']) ?></strong> le <?= $comment['date']->format('d/m/Y à H\hi') ?></p>
        <p><?= nl2br(htmlspecialchars($comment['contenu'])) ?></p>
        <?php if ($user->isAuthenticated()) { ?> 

          

          <a href="admin/comment-update-<?= $comment['id'] ?>.html">Modifier</a> 

          -

          <a data-toggle="modal" href="#delete<?= $comment['id']?>">Supprimer</a>
            <div class="modal fade" id="delete<?= $comment['id']?>">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Etes vous sur de vouloir supprimer le commentaire  de <?= $comment['auteur']?> ?</h4>
                  </div>
                  <div class="modal-body">
                    <?= $comment['contenu']?>
                  </div>
                  <div class="modal-footer">
                    <a id="btn_modal_comment" role="button" class="btn btn-danger" href="admin/comment-delete-<?= $comment['id'] ?>.html">Supprimer</a>
                    <button class="btn btn-default" data-dismiss="modal">Annuler</button>
                  </div>
                </div>
              </div>
            </div>

          -

        <?php } ?>
        
        
        <a data-toggle="modal" href="#signaler<?= $comment['id']?>">Signaler</a>
        <div class="modal fade" id="signaler<?= $comment['id']?>">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Etes vous sur de vouloir signaler le commentaire  de <?= $comment['auteur']?> ?</h4>
              </div>
              <div class="modal-body">
                <?= $comment['contenu']?>
              </div>
              <div class="modal-footer">
                <a id="btn_modal_comment" role="button" class="btn btn-danger" href="comment-signal-<?= $comment['id'] ?>.html">Signaler</a>
                <button class="btn btn-default" data-dismiss="modal">Annuler</button>
              </div>
            </div>
          </div>
        </div>

      </div>

      <?php
      }
      ?>
    </div>
  </div>
</div>

  


