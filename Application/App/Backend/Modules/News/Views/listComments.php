<table>
  <tr><th>Auteur</th><th>Contenu</th><th>Article</th><th>Date</th><th>Nombre de signalement</th><th>Action</th></tr>
<?php
foreach ($listComments as $comment)
{
  echo '<tr><td>', $comment['auteur'], '</td><td>', $comment['contenu'],' </td><td>', $comment['news'], '</td><td>le ', $comment['date']->format('d/m/Y à H\hi'), '</td><td>', $comment['numberSignal'], '</td><td><a href="comment-update-', $comment['id'], '.html"><img src="/images/update.png" alt="Modifier" /></a> <a href="comment-delete-', $comment['id'], '.html"><img src="/images/delete.png" alt="Supprimer" /></a></td></tr>', "\n";
}
?>
</table>