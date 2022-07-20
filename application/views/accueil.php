<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
	.gallery {
		padding: 1rem;
		display: grid;
		grid-template-columns: repeat(10, 80vw);
		grid-template-rows: 1fr;
		grid-column-gap: 1rem;
		grid-row-gap: 1rem;
		overflow: scroll;
		height: 90vh;
		scroll-snap-type: both mandatory;
		scroll-padding: 1rem;
	}

	.active {
		scroll-snap-type: unset;
	}

	li {
		scroll-snap-align: center;
		display: inline-block;
		border-radius: 3px;
		font-size: 0;
	}
	.modal-backdrop
	{
		opacity:0.8 !important;
	}

</style>


<body>
<ul class="gallery">
	<li>
		<button type="button" style="border:none; background: transparent" data-toggle="modal" data-target="#exampleModalLong">
			<img src="https://static.bandainamcoent.eu/high/peppa-pig/my-friend-peppa-pig/00-page-setup/PeppaPig_header_mobile.jpg">
		</button>
		<!-- Modal -->
		<div class="modal fade modal-xl" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-xl" role="document">
				<div class="modal-content">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					<div class="modal-body">
						<div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/42328207?h=250eeb2afc" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
						<p><a href="https://vimeo.com/42328207">Voil&agrave;</a> from <a href="https://vimeo.com/user8212293">Emilie Desjardins R&eacute;alisation</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
					</div>
				</div>
			</div>
		</div>
	</li>
	<li style="background: #f7ede2;"></li>
	<li style="background: #f5cac3;"></li>
	<li style="background: #84a59d;"></li>
	<li style="background: #f28482;"></li>
</ul>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
	const slider = document.querySelector('.gallery');
	let isDown = false;
	let startX;
	let scrollLeft;

	slider.addEventListener('mousedown', e => {
		isDown = true;
		slider.classList.add('active');
		startX = e.pageX - slider.offsetLeft;
		scrollLeft = slider.scrollLeft;
	});
	slider.addEventListener('mouseleave', _ => {
		isDown = false;
		slider.classList.remove('active');
	});
	slider.addEventListener('mouseup', _ => {
		isDown = false;
		slider.classList.remove('active');
	});
	slider.addEventListener('mousemove', e => {
		if (!isDown) return;
		e.preventDefault();
		const x = e.pageX - slider.offsetLeft;
		const SCROLL_SPEED = 3;
		const walk = (x - startX) * SCROLL_SPEED;
		slider.scrollLeft = scrollLeft - walk;
	});


</script>
</body>
