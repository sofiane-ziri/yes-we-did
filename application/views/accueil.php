
<?php var_dump($accueil)
?>
<main>
<ul class="gallery">
	<?php foreach ($accueil as $unique_accueil):?>
	<li style="; height:100%; max-height: 85vh">
		<button type="button" class="mybtn imagecontainer" data-toggle="modal" data-target="#exampleModalLong">
			<figure class="figureproduit">
			<img  class="imggallery"style="max-height:98vh" src="https://images3.alphacoders.com/951/95115.jpg">
			<figcaption class="produitinfo">
				<h4><?=$unique_accueil['titre_image']?></h4>
				<h5>caca</h5>
			</figcaption>
			</figure>
		</button>
		<!-- Modal -->
		<div class="modal fade modal-xl" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content" style="max-height: 98vh">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					<div class="modal-body">
						<?=$unique_accueil['iframe']?>
					</div>
				</div>
			</div>
		</div>
	</li>
	<?php endforeach; ?>
</ul>
</main>
<script src="<?=base_url();?>js/script.js"

</body>
