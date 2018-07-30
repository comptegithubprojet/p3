<p>Par <em><?= $news['auteur'] ?></em>, le <?= $news['dateAjout']->format('d/m/Y à H\hi') ?></p>
<h2><?= $news['titre'] ?></h2>
<p><?= nl2br($news['contenu']) ?></p>
 
<?php if ($news['dateAjout'] != $news['dateModif']) { ?>
  <p style="text-align: right;"><small><em>Modifiée le <?= $news['dateModif']->format('d/m/Y à H\hi') ?></em></small></p>
<?php } ?>
 
<p><a href="commenter-<?= $news['id'] ?>.html">Ajouter un commentaire</a></p>
 
<?php
if (empty($comments))
{
?>
<p>Aucun commentaire n'a encore été posté. Soyez le premier à en laisser un !</p>
<?php
}
 
foreach ($comments as $comment)
{
?>

    <div class="container">      
      <div id="html">

    <strong><?= htmlspecialchars($comment['auteur']) ?></strong> le <?= $comment['date']->format('d/m/Y à H\hi') ?>
    <?php if ($user->isAuthenticated()) { ?> 

      -

      <a href="admin/comment-update-<?= $comment['id'] ?>.html">Modifier</a> 

      |

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

    <?php } ?>

    - 
    
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
    </div>

  <p><?= nl2br(htmlspecialchars($comment['contenu'])) ?></p>


<?php
}
?>