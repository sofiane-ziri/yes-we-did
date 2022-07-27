<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<main>
<ul class="gallery">
	<li style="; height:100%; max-height: 85vh">
		<button type="button" class="mybtn imagecontainer" data-toggle="modal" data-target="#exampleModalLong">
			<figure class="figureproduit">
			<img  class="imggallery"style="max-height:98vh" src="https://images3.alphacoders.com/951/95115.jpg">
			<figcaption class="produitinfo">
				<h4>pipi</h4>
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
						<div style="padding:56.25% 0 0 0;position:relative;">
							<iframe src="https://player.vimeo.com/video/42328207?h=250eeb2afc" style="max-height:90vh; position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen>
							</iframe>
						</div>
						<script src="https://player.vimeo.com/api/player.js"></script>
						<p>
							<a href="https://vimeo.com/42328207">Voil&agrave;</a>
							from
							<a href="https://vimeo.com/user8212293">Emilie Desjardins R&eacute;alisation</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
					</div>
				</div>
			</div>
		</div>
	</li>
</ul>
</main>
<script src="<?=base_url();?>js/script.js"

</body>
