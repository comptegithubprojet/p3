<div class="row">
 	<div class="col-lg-10">

		<?php
		foreach ($listeNews as $news)
		{
		?>
			<div class="card">
				<h2><a href="news-<?= $news['id'] ?>.html"><?= $news['titre'] ?></a></h2>
				<p><?= nl2br($news['contenu']) ?></p>
			</div>
		<?php
		}
		?>

	</div>
</div>