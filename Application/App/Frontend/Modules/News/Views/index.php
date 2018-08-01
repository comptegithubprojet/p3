<div class="container-fluid">
	<div class="row">
		<div id="img-fs" class="col-xs-12">
			<img src="images/1.jpg" class="img-responsive">
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
	 	<div class="col-lg-12">

	 		<div id="content-news">
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

			<div id="page_navigation"> </div>

		</div>
	</div>
</div>