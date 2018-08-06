<div class="container-fluid">
	<div id="img-fs" class="col-xs-12">
		<img src="images/1.jpg" class="img-responsive">
	</div>
</div>

<div class="container">
	<div class="row">
	 	

	 		<div id="content-news">
				<?php
				foreach ($listeNews as $news)
				{
				?>
					<div class="card">
						<div class="card-header">
							<h2><a href="news-<?= $news['id'] ?>.html"><?= $news['titre'] ?></a></h2>
						</div>
						<div class="card-imagePrincipale">
							<?php
							if ($news['imagePrincipale'] != null) 
							{
								echo "<img id='img-article-index' class='img-responsive center-block' src='/images/".$news['imagePrincipale']."' >"; 
							}
							?>
						</div>
						<div class="card-content">
							<p><?= nl2br($news['contenu']) ?></p>
						</div>
						<div class="card-footer">
							<p id="date-article">Publié le : <?= $news['dateAjout']->format('d/m/Y à H\hi') ?></p>
							<p id="lire-plus"><a href="news-<?= $news['id'] ?>.html">Lire plus...</a></p>
						</div>					
					</div>
				<?php
				}
				?>
			</div>

			<div class="col-lg-12">
				<div id="page_navigation"> </div>
			</div>
		
	</div>
</div>